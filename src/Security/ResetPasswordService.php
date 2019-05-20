<?php

/*
 * This file is part of the DoyoUserBundle project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Security;

use Doyo\UserBundle\DoyoUserConstant;
use Doyo\UserBundle\Event\UserEvent;
use Doyo\UserBundle\Mailer\MailerInterface;
use Doyo\UserBundle\Manager\UserManagerInterface;
use Doyo\UserBundle\Model\UserInterface;
use Doyo\UserBundle\Util\TokenGeneratorInterface;
use spec\Doyo\UserBundle\Security\Translator;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;

class ResetPasswordService
{
    /**
     * @var UserManagerInterface
     */
    private $manager;

    /**
     * @var EventDispatcher
     */
    private $dispatcher;

    /**
     * @var TokenGeneratorInterface
     */
    private $tokenGenerator;

    /**
     * @var int
     */
    private $retryTtl;

    /**
     * @var MailerInterface
     */
    private $mailer;

    /**
     * @var Translator
     */
    private $translator;

    public function __construct(
        UserManagerInterface $manager,
        EventDispatcherInterface $dispatcher,
        TokenGeneratorInterface $tokenGenerator,
        MailerInterface $mailer,
        TranslatorInterface $translator,
        $retryTtl
    ) {
        $this->manager        = $manager;
        $this->dispatcher     = $dispatcher;
        $this->tokenGenerator = $tokenGenerator;
        $this->mailer         = $mailer;
        $this->translator     = $translator;
        $this->retryTtl       = $retryTtl;
    }

    /**
     * @throws \Exception
     *
     * @return JsonResponse
     */
    public function request(Request $request)
    {
        $json            = json_decode($request->getContent(), true);
        $usernameOrEmail = $json['username'] ?? null;

        $manager    = $this->manager;
        $translator = $this->translator;
        $statusCode = 404;
        $message    = $translator->trans(
            'reset_password.user_not_found',
            ['%username_or_email%' => $usernameOrEmail],
            'DoyoUserBundle'
        );
        $user     = null;
        $response = null;
        $response = new JsonResponse(['message' => $message], $statusCode);
        if (null !== $usernameOrEmail) {
            $user = $manager->find($usernameOrEmail);
        }

        if ($user instanceof UserInterface) {
            $this->doRequestPassword($user, $response);
        }

        return $response;
    }

    public function newPassword(Request $request)
    {
        $json     = $this->decodeJson($request);
        $manager  = $this->manager;
        $response = new JsonResponse();
        $retryTtl = $this->retryTtl;

        $user = $manager->findByToken($json['token']);
        if (!$user instanceof UserInterface) {
            $response->setStatusCode(404);
            $response->setData([
                'message' => 'User not found',
                'expired' => false,
            ]);
        } elseif (!$user->isPasswordRequestNonExpired($retryTtl)) {
            $user->setPlainPassword($json['password']);
            $manager->update($user);
            $response->setStatusCode(201);
            $response->setData([
                'message' => 'You can login with your new password now',
                'expired' => false,
            ]);
        } elseif ($user->isPasswordRequestNonExpired($retryTtl)) {
            $response->setStatusCode(405);
            $response->setData([
                'message' => 'Token is expired. Please create a new reset password request again',
                'expired' => true,
            ]);
        }

        return $response;
    }

    private function decodeJson(Request $request)
    {
        return json_decode($request->getContent(), true);
    }

    private function doRequestPassword(UserInterface $user, JsonResponse $response)
    {
        $manager        = $this->manager;
        $tokenGenerator = $this->tokenGenerator;
        $retryTtl       = $this->retryTtl;
        $dispatcher     = $this->dispatcher;
        $mailer         = $this->mailer;
        $translator     = $this->translator;
        $message        = 'reset_password.check_email';

        if (!$user->isPasswordRequestNonExpired($retryTtl)) {
            $event = new UserEvent($user);

            $user->setConfirmationToken($tokenGenerator->generateToken());
            $dispatcher->dispatch(DoyoUserConstant::RESET_PASSWORD_REQUEST, $event);
            $mailer->sendResetPasswordEmailMessage($user);

            // updating user info
            $user->setPasswordRequestedAt(new \DateTime());
            $manager->update($user);

            $response->setStatusCode(200);
        } else {
            // user already request to reset password
            $response->setStatusCode(406);
            $message = 'reset_password.not_expired';
        }

        $message = $translator->trans($message, ['%email%' => $user->getEmail()], 'DoyoUserBundle');
        $response->setData(['message' => $message]);
    }
}

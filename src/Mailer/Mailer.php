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

namespace Doyo\UserBundle\Mailer;

use Doyo\UserBundle\Model\UserInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class Mailer implements MailerInterface
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var UrlGeneratorInterface
     */
    private $router;

    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @var string
     */
    private $resetPasswordRoute;

    /**
     * @var string
     */
    private $registerRoute;

    /**
     * Mailer constructor.
     *
     * @param $mailer
     */
    public function __construct(
        $mailer, UrlGeneratorInterface $router,
        TranslatorInterface $translator,
        string $resetPasswordRoute,
        string $registerRoute
    ) {
        $this->mailer             = $mailer;
        $this->router             = $router;
        $this->translator         = $translator;
        $this->resetPasswordRoute = $resetPasswordRoute;
        $this->registerRoute      = $registerRoute;
    }

    public function sendConfirmationEmailMessage(UserInterface $user)
    {
    }

    public function sendResetPasswordEmailMessage(UserInterface $user)
    {
        $translator = $this->translator;

        $subject = $translator->trans(
            'reset_password.email.subject',
            [
                '%username%' => $user->getUsername(),
            ],
            'DoyoUserBundle'
        );

        $confirmationUrl = $this->router->generate(
            $this->resetPasswordRoute,
            ['token' => $user->getConfirmationToken()],
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        $message = $translator->trans(
            'reset_password.email.message',
            [
                '%email%'           => $user->getEmail(),
                '%username%'        => $user->getUsername(),
                '%date%'            => (new \DateTime())->format('Y-m-d H:i:s'),
                '%confirmationUrl%' => $confirmationUrl,
            ],
            'DoyoUserBundle'
        );
        $this->sendEmailMessage(
            $subject,
            $message,
            'me@itstoni.com',
            $user->getEmail()
        );
    }

    /**
     * @param string       $subject
     * @param string       $renderedTemplate
     * @param array|string $fromEmail
     * @param array|string $toEmail
     */
    protected function sendEmailMessage($subject, $renderedTemplate, $fromEmail, $toEmail)
    {
        // Render the email, use the first line as the subject, and the rest as the body
        $renderedLines = explode("\n", trim($renderedTemplate));
        $body          = implode("\n", $renderedLines);

        $message = (new \Swift_Message())
            ->setSubject($subject)
            ->setFrom($fromEmail)
            ->setTo($toEmail)
            ->setBody($body);

        $this->mailer->send($message);
    }
}

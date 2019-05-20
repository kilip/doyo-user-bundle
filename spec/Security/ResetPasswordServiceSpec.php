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

namespace spec\Doyo\UserBundle\Security;

use Doyo\UserBundle\DoyoUserConstant;
use Doyo\UserBundle\Event\UserEvent;
use Doyo\UserBundle\Mailer\MailerInterface;
use Doyo\UserBundle\Manager\UserManagerInterface;
use Doyo\UserBundle\Model\UserInterface;
use Doyo\UserBundle\Security\ResetPasswordService;
use Doyo\UserBundle\Util\TokenGeneratorInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;

class ResetPasswordServiceSpec extends ObjectBehavior
{
    public const retry_ttl = 7600;

    public function let(
        UserManagerInterface $manager,
        EventDispatcherInterface $dispatcher,
        TokenGeneratorInterface $tokenGenerator,
        MailerInterface $mailer,
        Translator $translator,
        UserInterface $user
    ) {
        $user->getEmail()->willReturn('some@email.com');
        $translator->trans(Argument::cetera())
            ->will(function ($args) {
                return $args;
            });
        $this->beConstructedWith(
            $manager,
            $dispatcher,
            $tokenGenerator,
            $mailer,
            $translator,
            self::retry_ttl
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(ResetPasswordService::class);
    }

    public function its_request_should_handle_request_properly(
        UserManagerInterface $manager,
        EventDispatcherInterface $dispatcher,
        TokenGeneratorInterface $tokenGenerator,
        MailerInterface $mailer,
        UserInterface $user,
        Request $request
    ) {
        $token    = 'some-token';
        $username = 'some-username';
        $json     = <<<EOC
{
    "username": "$username"
}
EOC;
        $request->getContent()->willReturn($json);

        $manager
            ->find($username)
            ->shouldBeCalled()
            ->willReturn($user);
        $manager
            ->update($user)
            ->shouldBeCalled();

        $tokenGenerator
            ->generateToken()
            ->willReturn($token);

        $user->isPasswordRequestNonExpired(self::retry_ttl)
            ->shouldBeCalled()
            ->willReturn(false);
        $user
            ->setConfirmationToken($token)
            ->shouldBeCalled()
            ->willReturn($user);
        $user
            ->setPasswordRequestedAt(Argument::type(\DateTime::class))
            ->shouldBeCalled()
            ->willReturn($user);
        $user->getEmail()->willReturn('some@email.com');

        $dispatcher->dispatch(
            DoyoUserConstant::RESET_PASSWORD_REQUEST,
                Argument::type(UserEvent::class)
            )
            ->shouldBeCalled();

        $mailer->sendResetPasswordEmailMessage($user)
            ->shouldBeCalled();

        /** @var \Symfony\Component\HttpFoundation\JsonResponse $return */
        $return = $this->request($request);
        $return->shouldBeAnInstanceOf(JsonResponse::class);
        $return->getStatusCode()->shouldReturn(200);
        $return->getContent()->shouldContain('reset_password.check_email');
    }

    public function its_request_should_return_404_when_user_not_exists(
        UserManagerInterface $manager,
        Request $request
    ) {
        $username = 'some';
        $json     = <<<EOC
{
    "username": "$username"
}
EOC;
        $request->getContent()->willReturn($json);

        $manager->find(Argument::any())
            ->willReturn(null);

        /** @var \Symfony\Component\HttpFoundation\JsonResponse $response */
        $response = $this->request($request);
        $response->getStatusCode()->shouldReturn(404);
        $response->getContent()->shouldContain('reset_password.user_not_found');
    }

    public function its_request_should_return_406_when_password_request_not_expired(
        UserManagerInterface $manager,
        UserInterface $user,
        Request $request
    ) {
        $request->getContent()->willReturn('{"username": "some"}');
        $user->getPasswordRequestedAt()->willReturn(new \DateTime());
        $user->isPasswordRequestNonExpired(Argument::any())
            ->willReturn(true);
        $manager->find(Argument::any())
            ->willReturn($user);

        /** @var \Symfony\Component\HttpFoundation\JsonResponse $response */
        $response = $this->request($request);
        $response->getStatusCode()->shouldReturn(406);
        $response->getContent()->shouldContain('reset_password.not_expired');
    }

    public function newPassword_return_404_when_reset_password_token_is_invalid(
        UserManagerInterface $manager,
        Request $request,
        UserInterface $user
    ) {
        $token    = 'some-token';
        $password = 'some-password';
        $request->getContent()->willReturn($this->getJsonFixture('token-new-password.json'));

        $manager->findByToken($token)
            ->shouldBeCalled()
            ->willReturn(null);
        $manager->update($user)->shouldNotBeCalled();

        $response = $this->newPassword($request);
        $response->shouldBeAnInstanceOf(JsonResponse::class);
        $response->getStatusCode()->shouldReturn(404);
    }

    public function its_newPassword_should_return_404_on_invalid_token(
        Request $request,
        UserManagerInterface $manager,
        UserInterface $user
    ) {
        $token = 'some-token';
        $request->getContent()->willReturn($this->getJsonFixture('token-new-password.json'));

        $manager->findByToken($token)->willReturn(null);

        $response = $this->newPassword($request);
        $response->shouldBeAnInstanceOf(JsonResponse::class);
        $response->getStatusCode()->shouldReturn(404);
    }

    public function its_newPassword_should_return_405_when_reset_password_token_expired(
        Request $request,
        UserManagerInterface $manager,
        UserInterface $user
    ) {
        $token = 'some-token';
        $request->getContent()->willReturn($this->getJsonFixture('token-new-password.json'));

        $manager->findByToken($token)->willReturn($user);

        $user->isPasswordRequestNonExpired(Argument::any())->willReturn(true);

        $response = $this->newPassword($request);
        $response->shouldBeAnInstanceOf(JsonResponse::class);
        $response->getStatusCode()->shouldReturn(405);
    }

    public function its_newPassword_should_creates_new_password(
        UserManagerInterface $manager,
        Request $request,
        UserInterface $user
    ) {
        $token    = 'some-token';
        $password = 'some-password';
        $request->getContent()->willReturn($this->getJsonFixture('token-new-password.json'));

        $manager->findByToken($token)
            ->shouldBeCalled()
            ->willReturn($user);
        $manager->update($user)->shouldBeCalled();

        $user->setPlainPassword($password)
            ->shouldBeCalled()
            ->willReturn($user);
        $user->isPasswordRequestNonExpired(Argument::any())
            ->willReturn(false);

        $response = $this->newPassword($request);
        $response->shouldBeAnInstanceOf(JsonResponse::class);
        $response->getStatusCode()->shouldReturn(201);
    }

    private function getJsonFixture($fileName)
    {
        return file_get_contents(__DIR__.'/fixtures/'.$fileName);
    }
}

class Translator implements TranslatorInterface
{
    public function trans($id, array $parameters = [], $domain = null, $locale = null)
    {
        return $id;
    }
}

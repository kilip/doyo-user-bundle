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

namespace spec\Doyo\UserBundle\Controller;

use Doyo\UserBundle\Controller\ResetPasswordController;
use Doyo\UserBundle\Security\ResetPasswordService;
use PhpSpec\ObjectBehavior;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ResetPasswordControllerSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(ResetPasswordController::class);
    }

    public function it_should_handle_reset_password_request(
        Request $request,
        ResetPasswordService $service
    ) {
        $response = new JsonResponse([]);
        $service->request($request)
            ->willReturn($response);
        $this->request($request, $service)->shouldReturn($response);
    }

    public function it_should_handle_new_password_request(
        Request $request,
        ResetPasswordService $service
    ) {
        $response = new JsonResponse();
        $service->newPassword($request)
            ->shouldBeCalled()
            ->willReturn($response);

        $this->newPassword($request, $service)->shouldReturn($response);
    }
}

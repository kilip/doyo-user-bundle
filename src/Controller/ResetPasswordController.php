<?php

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Controller;

use Doyo\UserBundle\Model\UserInterface;
use Doyo\UserBundle\Security\ResetPasswordService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ResetPasswordController
 *
 * @package Doyo\UserBundle\Controller
 */
class ResetPasswordController
{

    /**
     * @Route(
     *     name="doyo_user_reset_password_confirm",
     *     path="/default-reset-password/confirm/{token}"
     * )
     */
    public function confirmResetPassword()
    {
    }

    /**
     * @Route(
     *     name="doyo_user_reset_password_request",
     *     path="/reset-password/request",
     *     methods={"POST"}
     * )
     *
     * @param Request $request
     * @param ResetPasswordService $service
     * @return JsonResponse
     * @throws \Exception
     */
    public function request(Request $request, ResetPasswordService $service)
    {
        return $service->request($request);
    }

    /**
     * @Route(
     *     name="doyo_user_new_password",
     *     path="/reset-password/new-password",
     * )
     * @param Request $request
     * @param ResetPasswordService $service
     *
     * @return JsonResponse
     */
    public function newPassword(Request $request, ResetPasswordService $service)
    {
        return $service->newPassword($request);
    }

    /**
     * @param UserInterface $user
     */
    public function testNewPassword(UserInterface $user)
    {
        return $user;
    }
}
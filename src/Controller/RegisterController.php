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

namespace Doyo\UserBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;

class RegisterController
{
    /**
     * @Route(
     *     name="doyo_user.register",
     *     methods={"POST"},
     *     path="/register"
     * )
     */
    public function register()
    {
    }
}

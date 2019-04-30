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

namespace Doyo\UserBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ProfileController
{
    /**
     * @Route(
     *     name="doyo_user.change_password",
     *     methods={"POST"},
     *     path="/change-password"
     * )
     */
    public function changePassword()
    {
    }
}

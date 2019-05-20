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

namespace Doyo\UserBundle\Util;

use Doyo\UserBundle\Model\UserInterface;

interface PasswordUpdaterInterface
{
    /**
     * Updates the hashed password in the user when there is a new password.
     */
    public function hashPassword(UserInterface $user);
}

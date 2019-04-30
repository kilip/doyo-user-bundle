<?php

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Util;


use Doyo\UserBundle\Model\UserInterface;

interface PasswordUpdaterInterface
{
    public function hashPassword(UserInterface $user);
}
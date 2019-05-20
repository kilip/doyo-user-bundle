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

namespace Doyo\UserBundle\Manager;

use Doyo\UserBundle\Model\UserInterface;

interface UserManagerInterface
{
    /**
     * Find a user with username or email.
     *
     * @param string $usernameOrEmail
     */
    public function find($usernameOrEmail): ?UserInterface;

    public function getClass(): string;

    /**
     * @param bool $andFlush
     */
    public function update(UserInterface $user, $andFlush=true);

    public function findByToken(string $token): ?UserInterface;
}

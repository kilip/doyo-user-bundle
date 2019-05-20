<?php

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Manager;


use Doctrine\Common\Persistence\ObjectRepository;
use Doyo\UserBundle\Model\UserInterface;

interface UserManagerInterface
{
    /**
     * Find a user with username or email
     * @param string $usernameOrEmail
     * @return UserInterface|null
     */
    public function find($usernameOrEmail):?UserInterface;

    /**
     * @return string
     */
    public function getClass():string;

    /**
     * @param UserInterface $user
     * @param bool $andFlush
     * @return mixed
     */
    public function update(UserInterface $user, $andFlush=true);

    /**
     * @param string $token
     * @return UserInterface|null
     */
    public function findByToken(string $token):?UserInterface;
}
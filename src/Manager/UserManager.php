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

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use Doyo\UserBundle\Model\UserInterface;

class UserManager implements UserManagerInterface
{
    private $manager;

    private $class;

    /**
     * UserManager constructor.
     *
     * @param $class
     */
    public function __construct(
        ObjectManager $manager,
        $class
    ) {
        $this->manager = $manager;
        $this->class   = $class;
    }

    /**
     * @param string $usernameOrEmail
     *
     * @return UserInterface
     */
    public function find($usernameOrEmail): ?UserInterface
    {
        $repo = $this->getRepository();
        $user = $this->getRepository()->find($usernameOrEmail);

        if (!$user instanceof UserInterface) {
            $criteria = 'email';
            if (false === strpos($usernameOrEmail, '@')) {
                $criteria = 'username';
            }
            $user = $repo->findOneBy([$criteria => $usernameOrEmail]);
        }

        return $user;
    }

    public function findByToken(string $token): ?UserInterface
    {
        // TODO: Implement findByToken() method.
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function update(UserInterface $user, $andFlush = true)
    {
        $this->manager->persist($user);
        if ($andFlush) {
            $this->manager->flush();
        }
    }

    /**
     * @return ObjectRepository
     */
    protected function getRepository()
    {
        return $this->manager->getRepository($this->class);
    }
}

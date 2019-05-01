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

namespace Doyo\UserBundle\Behat;

use App\Entity\User;
use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behatch\Context\RestContext;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager;

class UserContext implements Context
{
    /**
     * @var DoctrineContext
     */
    private $doctrine;

    /**
     * @var JWTManager
     */
    private $jwtManager;

    /**
     * @var RestContext
     */
    private $restContext;

    public function __construct(JWTManager $jwtManager)
    {
        $this->jwtManager = $jwtManager;
    }

    /**
     * @BeforeScenario
     */
    public function gatherContexts(BeforeScenarioScope $scope)
    {
        $this->doctrine    = $scope->getEnvironment()->getContext(DoctrineContext::class);
        $this->restContext = $scope->getEnvironment()->getContext(RestContext::class);
    }

    /**
     * @param string $username
     *
     * @return User|object|null
     */
    public function thereIsUser($username, string $password=null, string $role= null)
    {
        $manager  = $this->doctrine->getManager();
        $repo     = $this->doctrine->getUserRepository();
        $user     = $repo->findOneBy(['username' => $username]);
        $password = null === $password ? $username : $password;

        if (null === $user) {
            $user = new User();
            $user
                ->setFullName('Administrator Test User')
                ->setUsername('admin')
                ->setEmail('admin@test.com')
                ->setPlainPassword($password)
                ->setEnabled(true);

            if (null !== $role) {
                $user->addRole('ROLE_ADMIN');
            }
            $manager->persist($user);
            $manager->flush();
        }

        return $user;
    }

    /**
     * @Given there is an admin user with username :username
     * @Given there is an admin user with username :username and password :password
     *
     * @param string $username
     * @param string $password
     *
     * @return User
     */
    public function thereIsAdminUserWith($username, $password = null)
    {
        return $this->thereIsUser($username, $password, 'ROLE_ADMIN');
    }

    /**
     * @Given I have logged in as admin
     */
    public function iHaveLoggedInAsAdmin()
    {
        $user  = $this->thereIsAdminUserWith('admin', 'admin');
        $token = $this->jwtManager->create($user);
        $this->restContext->iAddHeaderEqualTo('Authorization', 'Bearer '.$token);
    }

    /**
     * @Given I have logged in with username :username
     */
    public function iHaveLoggedInWith($username)
    {
        $user  = $this->thereIsUser($username);
        $token = $this->jwtManager->create($user);
        $this->restContext->iAddHeaderEqualTo('Authorization', 'Bearer '.$token);
    }
}

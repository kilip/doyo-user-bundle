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
     * @Given I have logged in as admin
     */
    public function iHaveLoggedInAsAdmin()
    {
        $manager = $this->doctrine->getManager();
        $repo    = $this->doctrine->getUserRepository();
        $user    = $repo->findOneBy(['username' => 'admin']);

        if (null === $user) {
            $user = new User();
            $user
                ->setFullName('Administrator Test User')
                ->setUsername('admin')
                ->setEmail('admin@test.com')
                ->setPlainPassword('admin')
                ->setEnabled(true)
                ->addRole('ROLE_ADMIN');
            $manager->persist($user);
            $manager->flush();
        }

        $token = $this->jwtManager->create($user);
        $this->restContext->iAddHeaderEqualTo('Authorization', 'Bearer '.$token);
    }
}

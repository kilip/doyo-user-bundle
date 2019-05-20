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
use Behat\Gherkin\Node\PyStringNode;
use Behatch\Context\RestContext;
use Doyo\UserBundle\Manager\UserManagerInterface;
use Doyo\UserBundle\Util\TokenGeneratorInterface;
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

    /**
     * @var integer
     */
    private $retryTtl;

    /**
     * @var UserManagerInterface
     */
    private $userManager;

    /**
     * @var string
     */
    private $currentUsername;

    private $tokenGenerator;

    public function __construct(
        JWTManager $jwtManager,
        UserManagerInterface $userManager,
        TokenGeneratorInterface $tokenGenerator,
        $retryTtl
    )
    {
        $this->jwtManager = $jwtManager;
        $this->userManager = $userManager;
        $this->retryTtl = $retryTtl;
        $this->tokenGenerator = $tokenGenerator;
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
        $userManager = $this->userManager;
        $user     = $userManager->find($username);
        $password = null === $password ? $username : $password;

        if (null === $user) {
            $user = new User();
            $user
                ->setFullName($username.' user')
                ->setUsername($username)
                ->setEmail($username.'@test.com')
                ->setPlainPassword($password)
                ->setEnabled(true);

            if (null !== $role) {
                $user->addRole('ROLE_ADMIN');
            }
            $userManager->update($user);
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

    /**
     * @Given I have request reset password for user :username
     * @Given I have request reset password
     * @param string $username
     * @throws \Exception
     */
    public function iHaveRequestPassword($username = null)
    {
        $username = is_null($username) ? $this->currentUsername:$username;
        $user = $this->thereIsUser($username);
        $userManager = $this->userManager;

        $user->setPasswordRequestedAt(new \DateTime());

        $userManager->update($user);
    }

    /**
     * @Given I have an expired request reset password for user :username
     * @Given I have an expired request reset password
     * @param string $username
     * @throws \Exception
     */
    public function iHaveAnExpiredRequestPassword($username = null)
    {
        $username = is_null($username) ? $this->currentUsername:$username;
        $user = $this->thereIsUser($username);
        $userManager = $this->userManager;

        $timestamp = (new \DateTime())->getTimestamp() - $this->retryTtl;
        $user->setPasswordRequestedAt(new \DateTime('@'.$timestamp));

        $userManager->update($user);
    }

    /**
     * @Given My username is :username
     * @param string $username
     */
    public function myUsernameIs($username)
    {
        $this->thereIsUser($username);
        $this->currentUsername = $username;
    }

    /**
     * @Given I never request password
     * @Given I never request password for :username
     * @param string $username
     * @throws \Exception
     */
    public function iDonTRequestPassword($username=null)
    {
        $username = is_null($username) ? $this->currentUsername:$username;
        $user = $this->thereIsUser($username);
        $userManager = $this->userManager;

        if($user->getPasswordRequestedAt() instanceof \DateTime){
            $user->setPasswordRequestedAt(null);
            $userManager->update($user);
        }
    }

    /**
     * @Given I post a JSON request for new password with password :password
     */
    public function iPostJSONRequestForNewPassword($password)
    {
        $username = $this->currentUsername;
        $tokenGenerator = $this->tokenGenerator;
        $user = $this->thereIsUser($username);
        $manager = $this->userManager;
        $restContext = $this->restContext;

        $token = $tokenGenerator->generateToken();
        $user->setConfirmationToken($token)->setPasswordRequestedAt(new \DateTime());

        $manager->update($user);

        $url = '/reset-password/foo/'.$token;
        $restContext->iSendARequestTo('POST',$url,$strJson);
    }
}

<?php

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Behat;


use Behat\Behat\Context\Context;
use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Behat\Mink\Exception\UnsupportedDriverActionException;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Symfony2Extension\Driver\KernelDriver;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Webmozart\Assert\Assert;

class MailContext implements Context
{
    /**
     * @var MinkContext
     */
    private $minkContext;

    /**
     * @BeforeScenario
     * @param BeforeScenarioScope $scope
     */
    public function gatherContexts(BeforeScenarioScope $scope)
    {
        $this->minkContext = $scope->getEnvironment()->getContext(MinkContext::class);
    }

    /**
     * @Given an email should be sent to :emailAddress
     *
     * @param string $emailAdress
     * @throws UnsupportedDriverActionException
     */
    public function thenEmailShouldBeSentTo($emailAdress)
    {
        $profile = $this->getSymfonyProfile();
        $collector = $profile->getCollector('swiftmailer');
        $correctRecipient = false;
        foreach($collector->getMessages() as $message){
            $correctRecipient = array_key_exists($emailAdress, $message->getTo());

            if($correctRecipient){
                break;
            }
        }

        Assert::true($correctRecipient,'Email is not sent to '.$emailAdress);
    }

    /**
     * @return Profile
     * @throws UnsupportedDriverActionException
     */
    protected function getSymfonyProfile()
    {
        $driver = $this->minkContext->getSession()->getDriver();

        if (!$driver instanceof KernelDriver) {
            throw new UnsupportedDriverActionException(
                'You need to tag the scenario with '.
                '"@mink:symfony2". Using the profiler is not '.
                'supported by %s', $driver
            );
        }

        $profile = $driver->getClient()->getProfile();
        if (false === $profile) {
            throw new \RuntimeException(
                'The profiler is disabled. Activate it by setting '.
                'framework.profiler.only_exceptions to false in '.
                'your config'
            );
        }

        return $profile;
    }
}
<?php

declare(strict_types=1);

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Behat;

use App\Entity\User;
use Behat\Behat\Context\Context;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Doyo\UserBundle\Model\UserInterface;

final class DoctrineContext implements Context
{
    /**
     * @var ManagerRegistry
     */
    private $doctrine;

    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * @var SchemaTool|null
     */
    private $schemaTool;

    /**
     * @var \Doctrine\Common\Persistence\Mapping\ClassMetadata[]
     */
    private $classes;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine     = $doctrine;
        $this->manager      = $doctrine->getManager();
        $this->schemaTool   = new SchemaTool($this->manager);
        $this->classes      = $this->manager->getMetadataFactory()->getAllMetadata();
    }
    /**
     * @BeforeScenario @createSchema
     */
    public function createDatabase()
    {
        $this->schemaTool->dropSchema($this->classes);
        $this->doctrine->getManager()->clear();
        $this->schemaTool->createSchema($this->classes);
    }

    /**
     * @Given there are :nb dummy users
     */
    public function thereAreDummyUsers(int $nb)
    {

        for($i=1;$i<=$nb;$i++){
            $dummy = new User();
            $dummy
                ->setFullName('Dummy User #'.$i)
                ->setUsername('dummy'.$i)
                ->setPlainPassword('dummy'.$i)
                ->setEmail('dummy'.$i.'@test.com')
            ;
            $this->manager->persist($dummy);
            $this->manager->flush();
        }
    }

    /**
     * @Given I don't have user with username :username
     * @param string $username
     */
    public function thereAreNoUserWithUsername($username)
    {
        $manager = $this->manager;
        $repo    = $manager->getRepository(User::class);
        $user = $repo->findByUsername($username);
        if($user instanceof UserInterface){
            $manager->remove($user);
            $manager->flush();
            $manager->close();
        }
    }
}
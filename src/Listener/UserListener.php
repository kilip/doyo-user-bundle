<?php

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Listener;


use Doctrine\Common\EventSubscriber;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\EntityManagerInterface;
use Doyo\UserBundle\Util\PasswordUpdaterInterface;
use Doyo\UserBundle\Model\UserInterface;

final class UserListener implements EventSubscriber
{
    private $passwordUpdater;

    public function __construct(
        PasswordUpdaterInterface $passwordUpdater
    )
    {
        $this->passwordUpdater = $passwordUpdater;
    }

    public function getSubscribedEvents()
    {
        return [
            'prePersist',
            'preUpdate'
        ];
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $object = $args->getObject();
        if($object instanceof UserInterface){
            $this->updateUser($object);
        }
    }

    public function preUpdate(LifecycleEventArgs $args)
    {
        $object = $args->getObject();
        if($object instanceof UserInterface){
            $this->updateUser($object);
            $this->recomputeChangeSet($args, $object);
        }
    }

    private function recomputeChangeSet(LifecycleEventArgs $args, UserInterface $user)
    {
        $manager = $args->getObjectManager();
        $meta    = $manager->getClassMetadata(get_class($user));

        if($manager instanceof EntityManagerInterface){
            $manager->getUnitOfWork()->recomputeSingleEntityChangeSet($meta, $user);
        }
    }

    private function updateUser(UserInterface $user)
    {
        $this->passwordUpdater->hashPassword($user);
    }
}
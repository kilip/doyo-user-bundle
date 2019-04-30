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

namespace Doyo\UserBundle\Tests\Listener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\UnitOfWork;
use Doyo\UserBundle\Listener\UserListener;
use Doyo\UserBundle\Model\UserInterface;
use Doyo\UserBundle\Util\PasswordUpdaterInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class UserListenerTest extends TestCase
{
    /**
     * @var UserListener
     */
    private $target;

    /**
     * @var MockObject
     */
    private $passwordUpdater;

    protected function setUp()
    {
        parent::setUp();

        $this->passwordUpdater = $this->createMock(PasswordUpdaterInterface::class);
        $this->target = new UserListener($this->passwordUpdater);
    }

    public function testGetSubscribedEvents()
    {
        $events = $this->target->getSubscribedEvents();

        $this->assertContains('preUpdate', $events);
        $this->assertContains('prePersist', $events);
    }

    public function getTestOnSubscribedEvents()
    {
        return [
            ['prePersist'],
            ['preUpdate', true],
        ];
    }

    /**
     * @dataProvider getTestOnSubscribedEvents
     *
     * @param string $eventName
     */
    public function testOnSubscribedEvents($eventName, $recomputeChanges = false)
    {
        $target = $this->target;
        $passwordUpdater = $this->passwordUpdater;
        $args = $this->createMock(LifecycleEventArgs::class);
        $user = $this->createMock(UserInterface::class);
        $meta = $this->createMock(ClassMetadata::class);
        $manager = $this->getMockBuilder(EntityManagerInterface::class)->disableOriginalConstructor()->getMock();
        $uow = $this->getMockBuilder(UnitOfWork::class)->disableOriginalConstructor()->getMock();

        $args->expects($this->exactly(2))
            ->method('getObject')
            ->willReturnOnConsecutiveCalls($user);

        $passwordUpdater->expects($this->once())
            ->method('hashPassword')
            ->with($user);

        if ($recomputeChanges) {
            $args->expects($this->once())
                ->method('getObjectManager')
                ->willReturn($manager);

            $manager->expects($this->once())
                ->method('getUnitOfWork')
                ->willReturn($uow);
            $manager->expects($this->once())
                ->method('getClassMetadata')
                ->willReturn($meta);
            $uow
                ->expects($this->once())
                ->method('recomputeSingleEntityChangeSet');
        }

        // test when user
        \call_user_func([$target, $eventName], $args);

        // test not called when object is not a user
        \call_user_func([$target, $eventName], $args);
    }
}

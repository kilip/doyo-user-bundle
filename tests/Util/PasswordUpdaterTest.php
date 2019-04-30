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

namespace Doyo\UserBundle\Tests\Util;

use Doyo\UserBundle\Model\UserInterface;
use Doyo\UserBundle\Util\PasswordUpdater;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

class PasswordUpdaterTest extends TestCase
{
    public function testHashPassword()
    {
        $factory = $this->createMock(EncoderFactoryInterface::class);
        $user = $this->createMock(UserInterface::class);
        $passEncoder = $this->createMock(PasswordEncoderInterface::class);
        $bcryptEncoder = $this->createMock(BCryptPasswordEncoder::class);
        $target = new PasswordUpdater($factory);
        $plainPassword = 'some-password';

        $user->expects($this->atLeastOnce())
            ->method('getPlainPassword')
            ->willReturn($plainPassword);

        $factory->expects($this->atLeastOnce())
            ->method('getEncoder')
            ->willReturn($passEncoder, $bcryptEncoder);

        $passEncoder->expects($this->once())
            ->method('encodePassword')
            ->with($plainPassword, $this->anything())
            ->willReturn('hashed-pass');

        $bcryptEncoder->expects($this->once())
            ->method('encodePassword')
            ->with($plainPassword, $this->anything())
            ->willReturn('hashed-bcrypt');

        $user->expects($this->exactly(2))
            ->method('setPassword')
            ->withConsecutive(['hashed-pass'], ['hashed-bcrypt']);

        // hash with salt
        $target->hashPassword($user);

        // hash with bcrypt
        $target->hashPassword($user);

        // test when plain password is null
        $user = $this->createMock(UserInterface::class);
        $user->expects($this->once())
            ->method('getPlainPassword')
            ->willReturn(null);
        $target->hashPassword($user);
    }
}

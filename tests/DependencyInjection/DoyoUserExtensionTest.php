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

namespace Doyo\UserBundle\Tests\DependencyInjection;

use Doyo\UserBundle\DependencyInjection\DoyoUserExtension;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

class DoyoUserExtensionTest extends AbstractExtensionTestCase
{
    protected function getContainerExtensions()
    {
        return [
            new DoyoUserExtension(),
        ];
    }

    public function testAfterParameterSet()
    {
        $this->load([
            'user_class' => 'App\\Entity\\User',
        ]);

        $this->assertContainerBuilderHasParameter('doyo.user.user_class', 'App\\Entity\\User');
    }

    public function testErrorWhenUserClassNotSet()
    {
        $this->expectException(InvalidConfigurationException::class);

        $this->load([]);
    }

    public function testErrorWhenClassNotExists()
    {
        $this->expectException(InvalidConfigurationException::class);
        $this->expectExceptionMessage('Error setting User class. The class "Foo\Bar" is not exists.');

        $this->load([
            'user_class' => 'Foo\\Bar',
        ]);
    }
}

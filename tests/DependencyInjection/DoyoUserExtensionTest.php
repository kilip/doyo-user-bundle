<?php

/*
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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


    public function test_after_parameter_set()
    {
        $this->load([
            'user_class' => 'App\\Entity\\User'
        ]);

        $this->assertContainerBuilderHasParameter('doyo.user.user_class','App\\Entity\\User');
    }

    public function test_error_when_user_class_not_set()
    {
        $this->expectException(InvalidConfigurationException::class);

        $this->load([]);
    }

    public function test_error_when_class_not_exists()
    {
        $this->expectException(InvalidConfigurationException::class);
        $this->expectExceptionMessage('Error setting User class. The class "Foo\Bar" is not exists.');

        $this->load([
            'user_class' => 'Foo\\Bar'
        ]);
    }
}

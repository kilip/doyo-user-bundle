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
use Doyo\UserBundle\Security\Voter\UserResourceVoter;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractExtensionTestCase;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

class DoyoUserExtensionTest extends AbstractExtensionTestCase
{
    private $defaultConfig = [
        'user_class' => 'App\\Entity\\User',
    ];

    protected function getContainerExtensions()
    {
        return [
            new DoyoUserExtension(),
        ];
    }

    public function testSecurityRolesDefault()
    {
        $this->load([
            'user_class' => 'App\\Entity\\User',
        ]);

        $this->assertContainerBuilderHasParameter('doyo_user.user_class', 'App\\Entity\\User');
        $this->assertContainerBuilderHasParameter('doyo_user.security.roles');

        $container = $this->container;
        $roles     = $container->getParameter('doyo_user.security.roles');

        $this->assertEquals('is_granted("ROLE_USER")', $roles[UserResourceVoter::CREATE]);
        $this->assertEquals('is_granted("ROLE_USER")', $roles[UserResourceVoter::READ]);
        $this->assertEquals('is_granted("ROLE_USER")', $roles[UserResourceVoter::UPDATE]);
        $this->assertEquals('is_granted("ROLE_USER")', $roles[UserResourceVoter::DELETE]);
        $this->assertEquals('is_granted("ROLE_USER")', $roles[UserResourceVoter::LIST]);

        $this->assertEquals('is_granted("IS_AUTHENTICATED_ANONYMOUSLY")', $roles[UserResourceVoter::REGISTER]);
        $this->assertEquals('is_granted("IS_AUTHENTICATED_ANONYMOUSLY")', $roles[UserResourceVoter::RESET_PASSWORD]);
        $this->assertEquals('is_granted("ROLE_USER") and object.owner==user', $roles[UserResourceVoter::CHANGE_PASSWORD]);
        $this->assertEquals('is_granted("ROLE_USER") and object.owner==user', $roles[UserResourceVoter::PROFILE_UPDATE]);
    }

    public function testGlobalConfig()
    {
        $this->load($this->defaultConfig);
        $container = $this->container;

        $this->assertTrue($container->hasParameter('doyo_user.config.retry_ttl'));
        $this->assertTrue($container->hasParameter('doyo_user.config.token_ttl'));
        $this->assertTrue($container->hasParameter('doyo_user.mail_confirmation.reset_password_route'));
        $this->assertTrue($container->hasParameter('doyo_user.mail_confirmation.register_route'));
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

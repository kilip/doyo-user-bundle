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
 * This file is part of the Omed project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\DependencyInjection;

use Doyo\UserBundle\Security\Voter\UserResourceVoter;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class DoyoUserExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config        = $this->processConfiguration($configuration, $configs);
        $locator       = new FileLocator(__DIR__.'/../Resources/config');
        $loader        = new XmlFileLoader($container, $locator);

        $this->handleConfig($container, $config);

        $loader->load('services.xml');
    }

    private function handleConfig(ContainerBuilder $container, array $config)
    {
        // setup user class to be use
        if (isset($config['user_class'])) {
            $userClass = $config['user_class'];
            if (!class_exists($userClass, true)) {
                throw new InvalidConfigurationException(sprintf('Error setting User class. The class "%s" is not exists.', $userClass));
            }
            $container->setParameter('doyo_user.user_class', $config['user_class']);
        }

        $roles = $config['security_roles'];
        $container->setParameter('doyo_user.security.roles', [
            UserResourceVoter::LIST            => $roles['list'],
            UserResourceVoter::CREATE          => $roles['create'],
            UserResourceVoter::READ            => $roles['read'],
            UserResourceVoter::UPDATE          => $roles['update'],
            UserResourceVoter::DELETE          => $roles['delete'],
            UserResourceVoter::REGISTER        => $roles['register'],
            UserResourceVoter::CHANGE_PASSWORD => $roles['change_password'],
            UserResourceVoter::RESET_PASSWORD  => $roles['reset_password'],
            UserResourceVoter::PROFILE_UPDATE  => $roles['update_profile'],
        ]);

        $this->mapParameters($container, 'doyo_user.config', $config['config']);
        $this->mapParameters($container, 'doyo_user.mail_confirmation', $config['mail_confirmation']);

        //@todo make reset password token ttl
        $container->setParameter('doyo_user_bundle_path', realpath(__DIR__.'/../../'));
    }

    private function mapParameters(ContainerBuilder $container, $nsPrefix, array $config)
    {
        $container->setParameter($nsPrefix, $config);
        foreach ($config as $name => $key) {
            $paramName = $nsPrefix.'.'.$name;
            $container->setParameter($paramName, $config[$name]);
        }
    }
}

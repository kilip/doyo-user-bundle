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
        $config = $this->processConfiguration($configuration, $configs);
        $locator = new FileLocator(__DIR__.'/../Resources/config');
        $loader = new XmlFileLoader($container, $locator);

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
            $container->setParameter('doyo.user.user_class', $config['user_class']);
        }
    }
}

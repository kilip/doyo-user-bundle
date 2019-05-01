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

namespace Doyo\UserBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        //@codeCoverageIgnoreStart
        if (method_exists(TreeBuilder::class, 'getRootNode')) {
            $treeBuilder = new TreeBuilder('doyo_user');
            $rootNode    = $treeBuilder->getRootNode();
        } else {
            $treeBuilder = new TreeBuilder();
            $rootNode    = $treeBuilder->root('doyo_user');
        }
        //@codeCoverageIgnoreEnd

        $rootNode
            ->children()
                ->scalarNode('user_class')
                    ->info('User class to be used')
                    ->cannotBeEmpty()
                    ->isRequired()
                ->end()
                // security access
                ->arrayNode('security_roles')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('create')
                            ->info('User role for create a new user')
                            ->defaultValue('is_granted("ROLE_USER")')
                        ->end()
                        ->scalarNode('read')
                            ->info('User role for read existing user')
                            ->defaultValue('is_granted("ROLE_USER")')
                        ->end()
                        ->scalarNode('update')
                            ->info('User role for update existing user')
                            ->defaultValue('is_granted("ROLE_USER")')
                        ->end()
                        ->scalarNode('delete')
                            ->info('User role for delete existing user')
                            ->defaultValue('is_granted("ROLE_USER")')
                        ->end()
                        ->scalarNode('list')
                            ->info('User role for list all user')
                            ->defaultValue('is_granted("ROLE_USER")')
                        ->end()
                        ->scalarNode('register')
                            ->info('Role for register new user')
                            ->defaultValue('is_granted("IS_AUTHENTICATED_ANONYMOUSLY")')
                        ->end()
                        ->scalarNode('change_password')
                            ->info('Change password for current user profile')
                            ->defaultValue('is_granted("ROLE_USER") and object.owner==user')
                        ->end()
                        ->scalarNode('update_profile')
                            ->info('Role for updating own profile')
                            ->defaultValue('is_granted("ROLE_USER") and object.owner==user')
                        ->end()
                        ->scalarNode('reset_password')
                            ->info('Role for reset password for existing user')
                            ->defaultValue('is_granted("IS_AUTHENTICATED_ANONYMOUSLY")')
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}

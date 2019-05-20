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

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Doyo\\UserBundle\\Controller\\ResetPasswordController::newPassword'     => ['privates', '.service_locator.0uMCgxy', 'get_ServiceLocator_0uMCgxyService.php', true],
    'Doyo\\UserBundle\\Controller\\ResetPasswordController::request'         => ['privates', '.service_locator.0uMCgxy', 'get_ServiceLocator_0uMCgxyService.php', true],
    'Doyo\\UserBundle\\Controller\\ResetPasswordController::testNewPassword' => ['privates', '.service_locator.tUmnHqV', 'get_ServiceLocator_TUmnHqVService.php', true],
    'Doyo\\UserBundle\\Controller\\ResetPasswordController:newPassword'      => ['privates', '.service_locator.0uMCgxy', 'get_ServiceLocator_0uMCgxyService.php', true],
    'Doyo\\UserBundle\\Controller\\ResetPasswordController:request'          => ['privates', '.service_locator.0uMCgxy', 'get_ServiceLocator_0uMCgxyService.php', true],
    'Doyo\\UserBundle\\Controller\\ResetPasswordController:testNewPassword'  => ['privates', '.service_locator.tUmnHqV', 'get_ServiceLocator_TUmnHqVService.php', true],
])), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));

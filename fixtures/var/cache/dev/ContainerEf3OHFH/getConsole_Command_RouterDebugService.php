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
// Returns the private 'console.command.router_debug' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/Command/RouterDebugCommand.php';

$this->privates['console.command.router_debug'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand(($this->services['router'] ?? $this->getRouterService()));

$instance->setName('debug:router');

return $instance;

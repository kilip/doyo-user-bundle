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
// Returns the private 'doctrine.dbal.logger.chain.default' shared service.

include_once $this->targetDirs[4].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';

$this->privates['doctrine.dbal.logger.chain.default'] = $instance = new \Doctrine\DBAL\Logging\LoggerChain();

$instance->addLogger(($this->privates['doctrine.dbal.logger'] ?? $this->load('getDoctrine_Dbal_LoggerService.php')));
$instance->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

return $instance;

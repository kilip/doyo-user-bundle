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
// Returns the private 'doctrine.mapping_import_command' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Command/DoctrineCommand.php';
include_once $this->targetDirs[4].'/vendor/doctrine/doctrine-bundle/Command/ImportMappingDoctrineCommand.php';

$this->privates['doctrine.mapping_import_command'] = $instance = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(($this->services['doctrine'] ?? $this->getDoctrineService()), $this->parameters['kernel.bundles']);

$instance->setName('doctrine:mapping:import');

return $instance;

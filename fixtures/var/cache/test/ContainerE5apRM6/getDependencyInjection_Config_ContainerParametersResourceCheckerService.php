<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'dependency_injection.config.container_parameters_resource_checker' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/config/ResourceCheckerInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php';

return $this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this);

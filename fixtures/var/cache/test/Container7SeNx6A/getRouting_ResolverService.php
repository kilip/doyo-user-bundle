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
// Returns the private 'routing.resolver' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/Loader.php';
include_once $this->targetDirs[4].'/vendor/symfony/routing/Loader/ObjectRouteLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php';

$this->privates['routing.resolver'] = $instance = new \Symfony\Component\Config\Loader\LoaderResolver();

$instance->addLoader(($this->privates['routing.loader.xml'] ?? $this->load('getRouting_Loader_XmlService.php')));
$instance->addLoader(($this->privates['routing.loader.yml'] ?? $this->load('getRouting_Loader_YmlService.php')));
$instance->addLoader(($this->privates['routing.loader.php'] ?? $this->load('getRouting_Loader_PhpService.php')));
$instance->addLoader(($this->privates['routing.loader.glob'] ?? $this->load('getRouting_Loader_GlobService.php')));
$instance->addLoader(($this->privates['routing.loader.directory'] ?? $this->load('getRouting_Loader_DirectoryService.php')));
$instance->addLoader(($this->privates['routing.loader.service'] ?? ($this->privates['routing.loader.service'] = new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this))));
$instance->addLoader(($this->privates['api_platform.route_loader'] ?? $this->load('getApiPlatform_RouteLoaderService.php')));
$instance->addLoader(($this->privates['routing.loader.annotation'] ?? $this->load('getRouting_Loader_AnnotationService.php')));
$instance->addLoader(($this->privates['routing.loader.annotation.directory'] ?? $this->load('getRouting_Loader_Annotation_DirectoryService.php')));
$instance->addLoader(($this->privates['routing.loader.annotation.file'] ?? $this->load('getRouting_Loader_Annotation_FileService.php')));

return $instance;
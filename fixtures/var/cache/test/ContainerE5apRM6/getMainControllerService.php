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
// Returns the public 'App\Controller\MainController' shared autowired service.

include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[4].'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once $this->targetDirs[3].'/src/Controller/MainController.php';

$this->services['App\\Controller\\MainController'] = $instance = new \App\Controller\MainController();

$instance->setContainer(($this->privates['.service_locator.KTVqfp6'] ?? $this->load('get_ServiceLocator_KTVqfp6Service.php'))->withContext('App\\Controller\\MainController', $this));

return $instance;

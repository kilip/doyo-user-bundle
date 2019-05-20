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
// Returns the private 'routing.loader.xml' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/Loader.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/FileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/FileLocatorInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/FileLocator.php';
include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/Config/FileLocator.php';

return $this->privates['routing.loader.xml'] = new \Symfony\Component\Routing\Loader\XmlFileLoader(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->targetDirs[3].'/src/Resources'), [0 => ($this->targetDirs[3].'/src')]))));

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
// Returns the private 'translation.loader.json' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/ArrayLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/FileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/JsonFileLoader.php';

return $this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader();
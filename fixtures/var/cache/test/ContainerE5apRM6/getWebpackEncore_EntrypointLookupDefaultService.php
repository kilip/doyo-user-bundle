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
// Returns the private 'webpack_encore.entrypoint_lookup[_default]' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/webpack-encore-bundle/src/Asset/IntegrityDataProviderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookup.php';

return $this->privates['webpack_encore.entrypoint_lookup[_default]'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookup(($this->targetDirs[3].'/public/build/entrypoints.json'), null, '_default');
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'webpack_encore.entrypoint_lookup_collection' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollectionInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/webpack-encore-bundle/src/Asset/EntrypointLookupCollection.php';

return $this->privates['webpack_encore.entrypoint_lookup_collection'] = new \Symfony\WebpackEncoreBundle\Asset\EntrypointLookupCollection(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    '_default' => ['privates', 'webpack_encore.entrypoint_lookup[_default]', 'getWebpackEncore_EntrypointLookupDefaultService.php', true],
]));

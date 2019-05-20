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
// Returns the private 'api_platform.route_loader' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/config/Loader/Loader.php';
include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/ApiLoader.php';

return $this->privates['api_platform.route_loader'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\ApiLoader(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService()), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()), ($this->privates['api_platform.operation_path_resolver.custom'] ?? $this->getApiPlatform_OperationPathResolver_CustomService()), $this, $this->parameters['api_platform.formats'], $this->getParameter('api_platform.resource_class_directories'), ($this->privates['api_platform.subresource_operation_factory.cached'] ?? $this->getApiPlatform_SubresourceOperationFactory_CachedService()), false, true, true);

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'api_platform.doctrine.orm.default.collection_data_provider' shared service.

include_once $this->targetDirs[4].'/vendor/api-platform/core/src/DataProvider/RestrictedDataProviderInterface.php';
include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/CollectionDataProvider.php';

return $this->privates['api_platform.doctrine.orm.default.collection_data_provider'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider(($this->services['doctrine'] ?? $this->getDoctrineService()), new RewindableGenerator(function () {
    yield 0 => ($this->privates['api_platform.doctrine.orm.query_extension.eager_loading'] ?? $this->load('getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService.php'));
    yield 1 => ($this->privates['api_platform.doctrine.orm.query_extension.filter'] ?? $this->load('getApiPlatform_Doctrine_Orm_QueryExtension_FilterService.php'));
    yield 2 => ($this->privates['api_platform.doctrine.orm.query_extension.filter_eager_loading'] ?? $this->load('getApiPlatform_Doctrine_Orm_QueryExtension_FilterEagerLoadingService.php'));
    yield 3 => ($this->privates['api_platform.doctrine.orm.query_extension.order'] ?? $this->load('getApiPlatform_Doctrine_Orm_QueryExtension_OrderService.php'));
    yield 4 => ($this->privates['api_platform.doctrine.orm.query_extension.pagination'] ?? $this->load('getApiPlatform_Doctrine_Orm_QueryExtension_PaginationService.php'));
}, 5));

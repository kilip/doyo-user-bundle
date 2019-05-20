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
// Returns the private 'api_platform.listener.view.validate' shared service.

include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Validator/EventListener/ValidateListener.php';
include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Validator/ValidatorInterface.php';
include_once $this->targetDirs[4].'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Validator.php';

return $this->privates['api_platform.listener.view.validate'] = new \ApiPlatform\Core\Validator\EventListener\ValidateListener(new \ApiPlatform\Core\Bridge\Symfony\Validator\Validator(($this->services['validator'] ?? $this->getValidatorService()), $this), ($this->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $this->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
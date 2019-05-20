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
// Returns the private 'twig.cache_warmer' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/twig-bundle/CacheWarmer/TemplateCacheCacheWarmer.php';

return $this->privates['twig.cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer(($this->privates['.service_locator.lSIKWsr'] ?? $this->load('get_ServiceLocator_LSIKWsrService.php'))->withContext('twig.cache_warmer', $this), null, []);

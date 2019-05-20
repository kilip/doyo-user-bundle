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
// Returns the private 'session.storage.mock_file' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/http-foundation/Session/Storage/SessionStorageInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php';
include_once $this->targetDirs[4].'/vendor/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php';
include_once $this->targetDirs[4].'/vendor/symfony/http-foundation/Session/SessionBagInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/http-foundation/Session/Storage/MetadataBag.php';

return $this->privates['session.storage.mock_file'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage(($this->targetDirs[0].'/sessions'), 'MOCKSESSID', ($this->privates['session.storage.metadata_bag'] ?? ($this->privates['session.storage.metadata_bag'] = new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0))));

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'filesystem' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/filesystem/Filesystem.php';

return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();

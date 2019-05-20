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
// Returns the private 'security.channel_listener' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-http/Firewall/ChannelListener.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-http/AccessMapInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-http/AccessMap.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-http/EntryPoint/RetryAuthenticationEntryPoint.php';

return $this->privates['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener(($this->privates['security.access_map'] ?? ($this->privates['security.access_map'] = new \Symfony\Component\Security\Http\AccessMap())), ($this->privates['security.authentication.retry_entry_point'] ?? ($this->privates['security.authentication.retry_entry_point'] = new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443))), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

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
// Returns the private 'security.authentication.listener.anonymous.main' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-http/Firewall/AnonymousAuthenticationListener.php';

return $this->privates['security.authentication.listener.anonymous.main'] = new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener(($this->services['security.token_storage'] ?? ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), $this->getParameter('container.build_hash'), ($this->privates['logger'] ?? ($this->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()));

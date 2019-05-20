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
// Returns the public 'security.csrf.token_manager' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/CsrfTokenManagerInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/CsrfTokenManager.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/TokenStorage/TokenStorageInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/TokenStorage/ClearableTokenStorageInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/TokenStorage/SessionTokenStorage.php';

return $this->services['security.csrf.token_manager'] = new \Symfony\Component\Security\Csrf\CsrfTokenManager(new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator(), new \Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage(($this->services['session'] ?? $this->load('getSessionService.php'))), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

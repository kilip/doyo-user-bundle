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
// Returns the private 'lexik_jwt_authentication.security.guard.jwt_token_authenticator' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-guard/AuthenticatorInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-guard/AbstractGuardAuthenticator.php';
include_once $this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle/Security/Guard/JWTTokenAuthenticator.php';

return $this->privates['lexik_jwt_authentication.security.guard.jwt_token_authenticator'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Guard\JWTTokenAuthenticator(($this->services['lexik_jwt_authentication.jwt_manager'] ?? $this->load('getLexikJwtAuthentication_JwtManagerService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['lexik_jwt_authentication.extractor.chain_extractor'] ?? $this->load('getLexikJwtAuthentication_Extractor_ChainExtractorService.php')));

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
// Returns the private 'lexik_jwt_authentication.jws_provider.lcobucci' shared service.

include_once $this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/JWSProviderInterface.php';
include_once $this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/LcobucciJWSProvider.php';
include_once $this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
include_once $this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
include_once $this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
include_once $this->targetDirs[4].'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

return $this->privates['lexik_jwt_authentication.jws_provider.lcobucci'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(($this->services['lexik_jwt_authentication.key_loader'] ?? ($this->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($this->getEnv('resolve:JWT_SECRET_KEY'), $this->getEnv('resolve:JWT_PUBLIC_KEY'), $this->getEnv('JWT_PASSPHRASE')))), 'openssl', 'RS256', 3600, 0);

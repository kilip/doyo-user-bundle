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
// Returns the public 'security.password_encoder' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-core/Encoder/UserPasswordEncoderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php';

return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->load('getSecurity_EncoderFactory_GenericService.php')));

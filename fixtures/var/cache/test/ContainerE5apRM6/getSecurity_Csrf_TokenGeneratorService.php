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
// Returns the private 'security.csrf.token_generator' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/TokenGenerator/TokenGeneratorInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-csrf/TokenGenerator/UriSafeTokenGenerator.php';

return $this->privates['security.csrf.token_generator'] = new \Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator();
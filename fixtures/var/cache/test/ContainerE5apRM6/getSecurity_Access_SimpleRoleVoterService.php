<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access.simple_role_voter' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/Voter/RoleVoter.php';

return $this->privates['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter();

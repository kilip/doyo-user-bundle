<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doyo_user.security.user_resource_voter' shared autowired service.

include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
include_once $this->targetDirs[4].'/src/Security/Voter/UserResourceVoter.php';

return $this->privates['doyo_user.security.user_resource_voter'] = new \Doyo\UserBundle\Security\Voter\UserResourceVoter($this->parameters['doyo_user.security.roles'], ($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php')));

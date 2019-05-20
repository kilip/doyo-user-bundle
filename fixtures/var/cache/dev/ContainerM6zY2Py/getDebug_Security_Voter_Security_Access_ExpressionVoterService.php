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
// Returns the private 'debug.security.voter.security.access.expression_voter' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';

return $this->privates['debug.security.voter.security.access.expression_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(($this->privates['security.access.expression_voter'] ?? $this->load('getSecurity_Access_ExpressionVoterService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

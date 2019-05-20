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
// Returns the private 'doyo_user.security.reset_password' shared autowired service.

include_once $this->targetDirs[4].'/src/Security/ResetPasswordService.php';
include_once $this->targetDirs[4].'/src/Util/TokenGeneratorInterface.php';
include_once $this->targetDirs[4].'/src/Util/TokenGenerator.php';

return $this->privates['doyo_user.security.reset_password'] = new \Doyo\UserBundle\Security\ResetPasswordService(($this->privates['doyo_user.service.user_manager'] ?? $this->load('getDoyoUser_Service_UserManagerService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['doyo_user.util.token_generator'] ?? ($this->privates['doyo_user.util.token_generator'] = new \Doyo\UserBundle\Util\TokenGenerator())), ($this->privates['doyo_user.service.mailer'] ?? $this->load('getDoyoUser_Service_MailerService.php')), ($this->services['translator'] ?? $this->getTranslatorService()), 7200);

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
include_once $this->targetDirs[4].'/src/Manager/UserManagerInterface.php';
include_once $this->targetDirs[4].'/src/Manager/UserManager.php';
include_once $this->targetDirs[4].'/src/Util/TokenGeneratorInterface.php';
include_once $this->targetDirs[4].'/src/Util/TokenGenerator.php';
include_once $this->targetDirs[4].'/src/Mailer/MailerInterface.php';
include_once $this->targetDirs[4].'/src/Mailer/Mailer.php';

$a = ($this->services['translator'] ?? $this->getTranslatorService());

return $this->privates['doyo_user.security.reset_password'] = new \Doyo\UserBundle\Security\ResetPasswordService(new \Doyo\UserBundle\Manager\UserManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), 'App\\Entity\\User'), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Doyo\UserBundle\Util\TokenGenerator(), new \Doyo\UserBundle\Mailer\Mailer(($this->services['swiftmailer.mailer.default'] ?? $this->load('getSwiftmailer_Mailer_DefaultService.php')), ($this->services['router'] ?? $this->getRouterService()), $a, 'app_reset_password_confirm', 'app_register_confirm'), $a, 7200);
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
// Returns the private 'swiftmailer.mailer.default.transport.eventdispatcher' shared service.

include_once $this->targetDirs[4].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
include_once $this->targetDirs[4].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';

return $this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();

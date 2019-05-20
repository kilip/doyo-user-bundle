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
// Returns the private 'validator.expression' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[4].'/vendor/symfony/validator/Constraints/ExpressionValidator.php';

return $this->privates['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator();

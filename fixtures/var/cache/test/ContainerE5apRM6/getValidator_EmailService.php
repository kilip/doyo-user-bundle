<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'validator.email' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/validator/ConstraintValidatorInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/validator/ConstraintValidator.php';
include_once $this->targetDirs[4].'/vendor/symfony/validator/Constraints/EmailValidator.php';

return $this->privates['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator('html5');

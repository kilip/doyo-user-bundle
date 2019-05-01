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

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface as BaseUserInterface;

/**
 * @internal Only for back compatibility. Remove / merge when dropping support for Symfony 4
 */
interface UserInterface extends BaseUserInterface, \Serializable
{
    public const ROLE_DEFAULT = 'ROLE_USER';

    public const ROLE_SUPER_ADMIN = 'ROLE_SUPER_ADMIN';

    /**
     * Returns the user unique id.
     */
    public function getId();

    /**
     * Sets the username.
     *
     * @return static
     */
    public function setUsername(string $username);

    /**
     * @return static
     */
    public function setSalt(?string $salt);

    /**
     * Gets email.
     *
     * @return string
     */
    public function getEmail();

    /**
     * Sets the email.
     *
     * @return static
     */
    public function setEmail(string $email);

    /**
     * Gets the plain password.
     *
     * @return string
     */
    public function getPlainPassword();

    /**
     * Sets the plain password.
     *
     * @return static
     */
    public function setPlainPassword(string $password);

    /**
     * Sets the hashed password.
     *
     * @return static
     */
    public function setPassword(string $password);

    /**
     * @return static
     */
    public function setEnabled(bool $boolean);

    /**
     * Gets the confirmation token.
     *
     * @return string|null
     */
    public function getConfirmationToken();

    /**
     * Sets the confirmation token.
     *
     * @return static
     */
    public function setConfirmationToken(?string $confirmationToken);

    /**
     * Sets the timestamp that the user requested a password reset.
     *
     * @return static
     */
    public function setPasswordRequestedAt(?\DateTime $date = null);

    /**
     * Checks whether the password reset request has expired.
     *
     * @param int $ttl Requests older than this many seconds will be considered expired
     *
     * @return bool
     */
    public function isPasswordRequestNonExpired($ttl);

    /**
     * Sets the last login time.
     *
     * @return static
     */
    public function setLastLogin(?\DateTime $time = null);

    /**
     * Never use this to check if this user has access to anything!
     *
     * Use the AuthorizationChecker, or an implementation of AccessDecisionManager
     * instead, e.g.
     *
     *         $authorizationChecker->isGranted('ROLE_USER');
     *
     * @param string $role
     *
     * @return bool
     */
    public function hasRole($role);

    /**
     * Sets the roles of the user.
     *
     * This overwrites any previous roles.
     *
     * @return static
     */
    public function setRoles(array $roles);

    /**
     * Adds a role to the user.
     *
     * @param string $role
     *
     * @return static
     */
    public function addRole($role);

    /**
     * Removes a role to the user.
     *
     * @param string $role
     *
     * @return static
     */
    public function removeRole($role);

    /**
     * Checks whether the user is enabled.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a DisabledException and prevent login.
     *
     * @return bool true if the user is enabled, false otherwise
     *
     * @see DisabledException
     */
    public function isEnabled();
}

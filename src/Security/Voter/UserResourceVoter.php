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
 * This file is part of the Omed package.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doyo\UserBundle\Security\Voter;

use Doyo\UserBundle\Model\UserInterface;
use Symfony\Component\ExpressionLanguage\Expression;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;

class UserResourceVoter extends Voter
{
    public const CREATE = 'DOYO_USER_CREATE';
    public const READ   = 'DOYO_USER_READ';
    public const UPDATE = 'DOYO_USER_UPDATE';
    public const DELETE = 'DOYO_USER_DELETE';
    public const LIST   = 'DOYO_USER_LIST';

    public const CHANGE_PASSWORD = 'DOYO_PROFILE_CHANGE_PASSWORD';
    public const PROFILE_UPDATE = 'DOYO_PROFILE_UPDATE';

    public const REGISTER = 'DOYO_USER_REGISTER';
    public const RESET_PASSWORD = 'DOYO_PROFILE_RESET_PASSWORD';

    private $roles;

    private $expressionVoter;

    /**
     * UserResourceVoter constructor.
     * @param array $roles
     * @param ExpressionVoter $expressionVoter
     */
    public function __construct(
        array $roles,
        ExpressionVoter $expressionVoter
    ) {
        $this->roles           = $roles;
        $this->expressionVoter = $expressionVoter;
    }

    /**
     * @param string $attribute
     *
     * @return bool
     */
    protected function supports($attribute, $subject)
    {
        return \in_array($attribute, [
            self::CREATE,
            self::READ,
            self::UPDATE,
            self::DELETE,
            self::LIST,
        ], true);
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        $expr = new Expression($this->roles[$attribute]);
        $voteResult = $this->expressionVoter->vote($token, $subject, [$expr]);

        return VoterInterface::ACCESS_GRANTED === $voteResult;
    }
}

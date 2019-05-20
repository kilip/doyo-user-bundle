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

namespace Doyo\UserBundle\DataProvider;

use ApiPlatform\Core\DataProvider\ItemDataProviderInterface;
use ApiPlatform\Core\DataProvider\RestrictedDataProviderInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserItemDataProvider implements ItemDataProviderInterface, RestrictedDataProviderInterface
{
    /**
     * @var ObjectManager
     */
    private $manager;

    /**
     * @var string
     */
    private $userClass;

    public function __construct(ObjectManager $manager, string $userClass)
    {
        $this->manager   = $manager;
        $this->userClass = $userClass;
    }

    public function getItem(string $resourceClass, $id, string $operationName = null, array $context = [])
    {
        $manager    = $this->manager;
        $repository = $manager->getRepository($resourceClass);

        return $repository->findOneBy(['username' => $id]);
    }

    public function supports(string $resourceClass, string $operationName = null, array $context = []): bool
    {
        return $this->userClass === $resourceClass;
    }
}

<?php
/**
 * This file is part of the Borobudur package.
 *
 * (c) 2017 Borobudur <http://borobudur.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Borobudur\Infrastructure\Symfony\Doctrine;

use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
interface EnableDoctrineInterface
{
    /**
     * Sets the doctrine to enable for current implementation.
     *
     * @param ContainerBuilder $container
     */
    public function enableDoctrine(ContainerBuilder $container): void;
}

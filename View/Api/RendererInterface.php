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

namespace Borobudur\Infrastructure\Symfony\View\Api;

use Borobudur\Component\Messaging\Request\ConfigurationInterface;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author  Iqbal Maulana <iq.bluejack@gmail.com>
 */
interface RendererInterface
{
    /**
     * Render a response from given configuration and view.
     *
     * @param ConfigurationInterface $requestConfiguration
     * @param View                   $view
     *
     * @return Response
     */
    public function handle(ConfigurationInterface $requestConfiguration, View $view): Response;
}

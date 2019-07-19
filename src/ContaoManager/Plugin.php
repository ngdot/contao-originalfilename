<?php

/*
 * This file is part of the ContaoOriginalFileName Bundle.
 *
 * (c) Nicolas Görlach <https://github.com/ngdot>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ContaoOriginalFileNameBundle\ContaoManager;

use ContaoOriginalFileNameBundle\ContaoOriginalFileNameBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;


/**
 * Plugin for the Contao Manager.
 *
 * @author Nicolas Görlach <info@nicolas-goerlach.de>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoOriginalFileNameBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}

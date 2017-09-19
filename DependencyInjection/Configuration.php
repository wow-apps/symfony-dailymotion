<?php
/**
 * This file is part of the WoW-Apps/Symfony-Dailymotion bundle for Symfony 3
 * https://github.com/wow-apps/symfony-dailymotion
 *
 * (c) 2017 WoW-Apps
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WowApps\DailymotionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package WowApps\DailymotionBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('wow_apps_dailymotion');

        $rootNode
            ->children()
            ->scalarNode('api_url')->defaultValue('https://api.dailymotion.com')->end()
            ->scalarNode('api_key')->defaultValue('')->end()
            ->scalarNode('api_secret')->defaultValue('')->end()
            ->arrayNode('default_values')
                ->children()
                ->scalarNode('device_filter')->defaultValue('detect')->end()
                ->scalarNode('family_filter')->defaultValue('false')->end()
                ->scalarNode('localization')->defaultValue('en_US')->end()
                ->scalarNode('ssl_assets')->defaultValue('off')->end()
                ->scalarNode('thumbnail_ratio')->defaultValue('original')->end()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}

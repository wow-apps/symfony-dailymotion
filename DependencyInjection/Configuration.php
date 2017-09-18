<?php

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
            ->end()
        ;

        return $treeBuilder;
    }
}

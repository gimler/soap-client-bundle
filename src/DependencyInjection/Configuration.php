<?php

namespace Freshcells\SoapClientBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see
 * {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('freshcells_soap_client');
        $rootNode    = $treeBuilder->getRootNode();

        $rootNode->children()
                    ->scalarNode('logger')->defaultFalse()->end()
                    ->scalarNode('enable_profiler')->defaultTrue()->end();

        return $treeBuilder;
    }
}

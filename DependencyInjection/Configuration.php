<?php

namespace Victoire\Widget\LayoutBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('victoire_widget_layout');

        $rootNode

            ->children()
                ->variableNode('layouts')->defaultValue([
                    '2575' => [3, 9],
                    '7525' => [9, 3],
                    'fifth' => ["5ths", "5ths", "5ths", "5ths", "5ths"],
                    'half' => [6, 6],
                    'halfquarterquarter' => [6, 3, 3],
                    'once' => [12],
                    'quarterhalfquarter' => [3, 6, 3],
                    'quarterquarterhalf' => [3, 3, 6],
                    'quarters' => [3, 3, 3, 3],
                    'third' => [4, 4, 4],
                    'third21' => [8, 4],
                    'third12' => [4, 8],
                ])->end()
            ->end()



        ->end();

        return $treeBuilder;
    }
}

<?php
namespace App\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class StrategyCompilerPass implements CompilerPassInterface
{
    /**
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $callContext = $container->findDefinition('call.context');
        $taggedServices = $container->findTaggedServiceIds('call.method');
        $taggedServiceIds = array_keys($taggedServices);var_dump($taggedServiceIds); die;
        foreach ($taggedServiceIds as $taggedServiceId) {
            /** @var TYPE_NAME $taggedServiceId */
            $callContext->addMethodCall('addProvider', [new Reference($taggedServiceId)]);
        }
    }
}
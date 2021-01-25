<?php
namespace App\IpStoreBundle\DependencyInjection\CompilerPass;

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
        $context = $container->findDefinition('call.context');
        $taggedServices = $container->findTaggedServiceIds('call.method');
        $taggedServiceIds = array_keys($taggedServices);
        foreach ($taggedServiceIds as $taggedServiceId) {
            /** @var TYPE_NAME $taggedServiceId */
            $context->addMethodCall('addCallProvider', [new Reference($taggedServiceId)]);
        }
    }
}
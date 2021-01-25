<?php
namespace App\IpStoreBundle;

use App\IpStoreBundle\DependencyInjection\CompilerPass\StrategyCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class IpStoreBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new StrategyCompilerPass());
    }
}
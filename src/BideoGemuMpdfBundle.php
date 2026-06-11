<?php
namespace BideoGemu\MpdfBundle;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class BideoGemuMpdfBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $loader = new PhpFileLoader(
            $builder,
            new FileLocator(__DIR__ . '/../config')
        );
        $loader->load('services.php');
    }
}
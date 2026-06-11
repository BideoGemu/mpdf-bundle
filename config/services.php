<?php

use BideoGemu\MpdfBundle\Factory\MpdfFactory;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $container->services()
        ->set(MpdfFactory::class)
        ->args(['%kernel.cache_dir%']);
};

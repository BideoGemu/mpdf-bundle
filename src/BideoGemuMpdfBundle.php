<?php
namespace BideoGemu\MpdfBundle;

use BideoGemu\MpdfBundle\DependencyInjection\BideoGemuMpdfExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BideoGemuMpdfBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new BideoGemuMpdfExtension();
    }
}

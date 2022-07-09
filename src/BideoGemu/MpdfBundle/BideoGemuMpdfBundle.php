<?php
namespace BideoGemu\MpdfBundle;

use BideoGemu\MpdfBundle\DependencyInjection\BideoGemuMpdfExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BideoGemuMpdfBundle extends Bundle
{

    /**
     *
     * {@inheritdoc}
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::getContainerExtension()
     */
    public function getContainerExtension()
    {

        return new BideoGemuMpdfExtension();

    }

}

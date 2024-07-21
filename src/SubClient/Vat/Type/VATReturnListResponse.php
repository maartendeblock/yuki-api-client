<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

use Phpro\SoapClient\Type\ResultInterface;

class VATReturnListResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATReturnInfo
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATReturnInfo $VATReturnListResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATReturnInfo
     */
    public function getVATReturnListResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATReturnInfo
    {
        return $this->VATReturnListResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATReturnInfo $VATReturnListResult
     * @return static
     */
    public function withVATReturnListResult(?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATReturnInfo $VATReturnListResult) : static
    {
        $new = clone $this;
        $new->VATReturnListResult = $VATReturnListResult;

        return $new;
    }
}


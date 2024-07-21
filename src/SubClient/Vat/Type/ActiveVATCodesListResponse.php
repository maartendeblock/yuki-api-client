<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ActiveVATCodesListResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATCode
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATCode $ActiveVATCodesListResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATCode
     */
    public function getActiveVATCodesListResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATCode
    {
        return $this->ActiveVATCodesListResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATCode $ActiveVATCodesListResult
     * @return static
     */
    public function withActiveVATCodesListResult(?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\ArrayOfVATCode $ActiveVATCodesListResult) : static
    {
        $new = clone $this;
        $new->ActiveVATCodesListResult = $ActiveVATCodesListResult;

        return $new;
    }
}


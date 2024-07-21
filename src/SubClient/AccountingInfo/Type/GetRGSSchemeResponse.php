<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetRGSSchemeResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfRGSEntry
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfRGSEntry $GetRGSSchemeResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfRGSEntry
     */
    public function getGetRGSSchemeResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfRGSEntry
    {
        return $this->GetRGSSchemeResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfRGSEntry $GetRGSSchemeResult
     * @return static
     */
    public function withGetRGSSchemeResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfRGSEntry $GetRGSSchemeResult) : static
    {
        $new = clone $this;
        $new->GetRGSSchemeResult = $GetRGSSchemeResult;

        return $new;
    }
}


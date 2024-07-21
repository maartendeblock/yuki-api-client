<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetContactDefaultValuesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfContactDefaultValues
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfContactDefaultValues $GetContactDefaultValuesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfContactDefaultValues
     */
    public function getGetContactDefaultValuesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfContactDefaultValues
    {
        return $this->GetContactDefaultValuesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfContactDefaultValues $GetContactDefaultValuesResult
     * @return static
     */
    public function withGetContactDefaultValuesResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfContactDefaultValues $GetContactDefaultValuesResult) : static
    {
        $new = clone $this;
        $new->GetContactDefaultValuesResult = $GetContactDefaultValuesResult;

        return $new;
    }
}


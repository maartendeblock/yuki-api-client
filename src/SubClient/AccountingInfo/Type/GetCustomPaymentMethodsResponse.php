<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustomPaymentMethodsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfPaymentMethod
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfPaymentMethod $GetCustomPaymentMethodsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfPaymentMethod
     */
    public function getGetCustomPaymentMethodsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfPaymentMethod
    {
        return $this->GetCustomPaymentMethodsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfPaymentMethod $GetCustomPaymentMethodsResult
     * @return static
     */
    public function withGetCustomPaymentMethodsResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfPaymentMethod $GetCustomPaymentMethodsResult) : static
    {
        $new = clone $this;
        $new->GetCustomPaymentMethodsResult = $GetCustomPaymentMethodsResult;

        return $new;
    }
}


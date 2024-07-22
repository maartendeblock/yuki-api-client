<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PaymentMethodsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResult $PaymentMethodsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResult
     */
    public function getPaymentMethodsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResult
    {
        return $this->PaymentMethodsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResult $PaymentMethodsResult
     * @return static
     */
    public function withPaymentMethodsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\PaymentMethodsResult $PaymentMethodsResult) : static
    {
        $new = clone $this;
        $new->PaymentMethodsResult = $PaymentMethodsResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfPaymentMethod
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\PaymentMethod>
     */
    private ?array $PaymentMethod = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\PaymentMethod>
     */
    public function getPaymentMethod() : ?array
    {
        return $this->PaymentMethod;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\PaymentMethod> $PaymentMethod
     * @return static
     */
    public function withPaymentMethod(?array $PaymentMethod) : static
    {
        $new = clone $this;
        $new->PaymentMethod = $PaymentMethod;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class OutputFields
{
    /**
     * @var null | string
     */
    private ?string $GLAccount = null;

    /**
     * @var null | string
     */
    private ?string $VATCode = null;

    /**
     * @var null | string
     */
    private ?string $PaymentMethod = null;

    /**
     * @var null | string
     */
    private ?string $PaymentTerm = null;

    /**
     * @return null | string
     */
    public function getGLAccount() : ?string
    {
        return $this->GLAccount;
    }

    /**
     * @param null | string $GLAccount
     * @return static
     */
    public function withGLAccount(?string $GLAccount) : static
    {
        $new = clone $this;
        $new->GLAccount = $GLAccount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVATCode() : ?string
    {
        return $this->VATCode;
    }

    /**
     * @param null | string $VATCode
     * @return static
     */
    public function withVATCode(?string $VATCode) : static
    {
        $new = clone $this;
        $new->VATCode = $VATCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentMethod() : ?string
    {
        return $this->PaymentMethod;
    }

    /**
     * @param null | string $PaymentMethod
     * @return static
     */
    public function withPaymentMethod(?string $PaymentMethod) : static
    {
        $new = clone $this;
        $new->PaymentMethod = $PaymentMethod;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentTerm() : ?string
    {
        return $this->PaymentTerm;
    }

    /**
     * @param null | string $PaymentTerm
     * @return static
     */
    public function withPaymentTerm(?string $PaymentTerm) : static
    {
        $new = clone $this;
        $new->PaymentTerm = $PaymentTerm;

        return $new;
    }
}


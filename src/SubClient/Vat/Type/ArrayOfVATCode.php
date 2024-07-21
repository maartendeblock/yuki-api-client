<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

class ArrayOfVATCode
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATCode>
     */
    private ?array $VATCode = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATCode>
     */
    public function getVATCode() : ?array
    {
        return $this->VATCode;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATCode> $VATCode
     * @return static
     */
    public function withVATCode(?array $VATCode) : static
    {
        $new = clone $this;
        $new->VATCode = $VATCode;

        return $new;
    }
}


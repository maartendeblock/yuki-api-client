<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

class ArrayOfVATReturnInfo
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATReturnInfo>
     */
    private ?array $VATReturnInfo = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATReturnInfo>
     */
    public function getVATReturnInfo() : ?array
    {
        return $this->VATReturnInfo;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\VATReturnInfo> $VATReturnInfo
     * @return static
     */
    public function withVATReturnInfo(?array $VATReturnInfo) : static
    {
        $new = clone $this;
        $new->VATReturnInfo = $VATReturnInfo;

        return $new;
    }
}


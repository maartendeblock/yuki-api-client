<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfDefaultValue
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DefaultValue>
     */
    private ?array $DefaultValue = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DefaultValue>
     */
    public function getDefaultValue() : ?array
    {
        return $this->DefaultValue;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DefaultValue> $DefaultValue
     * @return static
     */
    public function withDefaultValue(?array $DefaultValue) : static
    {
        $new = clone $this;
        $new->DefaultValue = $DefaultValue;

        return $new;
    }
}


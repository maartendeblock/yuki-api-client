<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfContactDefaultValues
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ContactDefaultValues>
     */
    private ?array $ContactDefaultValues = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ContactDefaultValues>
     */
    public function getContactDefaultValues() : ?array
    {
        return $this->ContactDefaultValues;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ContactDefaultValues> $ContactDefaultValues
     * @return static
     */
    public function withContactDefaultValues(?array $ContactDefaultValues) : static
    {
        $new = clone $this;
        $new->ContactDefaultValues = $ContactDefaultValues;

        return $new;
    }
}


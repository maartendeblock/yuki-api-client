<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfRGSEntry
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\RGSEntry>
     */
    private ?array $RGSEntry = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\RGSEntry>
     */
    public function getRGSEntry() : ?array
    {
        return $this->RGSEntry;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\RGSEntry> $RGSEntry
     * @return static
     */
    public function withRGSEntry(?array $RGSEntry) : static
    {
        $new = clone $this;
        $new->RGSEntry = $RGSEntry;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfProjectBalance
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectBalance>
     */
    private ?array $ProjectBalance = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectBalance>
     */
    public function getProjectBalance() : ?array
    {
        return $this->ProjectBalance;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectBalance> $ProjectBalance
     * @return static
     */
    public function withProjectBalance(?array $ProjectBalance) : static
    {
        $new = clone $this;
        $new->ProjectBalance = $ProjectBalance;

        return $new;
    }
}


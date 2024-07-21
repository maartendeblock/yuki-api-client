<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfAccountStartBalance
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AccountStartBalance>
     */
    private ?array $AccountStartBalance = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AccountStartBalance>
     */
    public function getAccountStartBalance() : ?array
    {
        return $this->AccountStartBalance;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AccountStartBalance> $AccountStartBalance
     * @return static
     */
    public function withAccountStartBalance(?array $AccountStartBalance) : static
    {
        $new = clone $this;
        $new->AccountStartBalance = $AccountStartBalance;

        return $new;
    }
}


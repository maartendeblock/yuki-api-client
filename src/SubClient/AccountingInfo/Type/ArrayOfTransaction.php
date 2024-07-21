<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfTransaction
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Transaction>
     */
    private ?array $Transaction = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Transaction>
     */
    public function getTransaction() : ?array
    {
        return $this->Transaction;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Transaction> $Transaction
     * @return static
     */
    public function withTransaction(?array $Transaction) : static
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }
}


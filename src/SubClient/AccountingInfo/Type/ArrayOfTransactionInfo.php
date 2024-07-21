<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfTransactionInfo
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionInfo>
     */
    private ?array $TransactionInfo = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionInfo>
     */
    public function getTransactionInfo() : ?array
    {
        return $this->TransactionInfo;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionInfo> $TransactionInfo
     * @return static
     */
    public function withTransactionInfo(?array $TransactionInfo) : static
    {
        $new = clone $this;
        $new->TransactionInfo = $TransactionInfo;

        return $new;
    }
}


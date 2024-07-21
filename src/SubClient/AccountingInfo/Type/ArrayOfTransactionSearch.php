<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfTransactionSearch
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionSearch>
     */
    private ?array $TransactionSearch = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionSearch>
     */
    public function getTransactionSearch() : ?array
    {
        return $this->TransactionSearch;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionSearch> $TransactionSearch
     * @return static
     */
    public function withTransactionSearch(?array $TransactionSearch) : static
    {
        $new = clone $this;
        $new->TransactionSearch = $TransactionSearch;

        return $new;
    }
}


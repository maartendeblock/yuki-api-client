<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class TransactionSearch
{
    /**
     * @var 'AmountGreaterThanEqual' | 'AmountLessThanEqual'
     */
    private string $SearchOption;

    /**
     * @var null | string
     */
    private ?string $SearchValue = null;

    /**
     * @return 'AmountGreaterThanEqual' | 'AmountLessThanEqual'
     */
    public function getSearchOption() : string
    {
        return $this->SearchOption;
    }

    /**
     * @param 'AmountGreaterThanEqual' | 'AmountLessThanEqual' $SearchOption
     * @return static
     */
    public function withSearchOption(string $SearchOption) : static
    {
        $new = clone $this;
        $new->SearchOption = $SearchOption;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSearchValue() : ?string
    {
        return $this->SearchValue;
    }

    /**
     * @param null | string $SearchValue
     * @return static
     */
    public function withSearchValue(?string $SearchValue) : static
    {
        $new = clone $this;
        $new->SearchValue = $SearchValue;

        return $new;
    }
}


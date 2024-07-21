<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ForeignCurrency
{
    /**
     * @var float
     */
    private float $amountFC;

    /**
     * @var float
     */
    private float $rate;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @return float
     */
    public function getAmountFC() : float
    {
        return $this->amountFC;
    }

    /**
     * @param float $amountFC
     * @return static
     */
    public function withAmountFC(float $amountFC) : static
    {
        $new = clone $this;
        $new->amountFC = $amountFC;

        return $new;
    }

    /**
     * @return float
     */
    public function getRate() : float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return static
     */
    public function withRate(float $rate) : static
    {
        $new = clone $this;
        $new->rate = $rate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }

    /**
     * @param null | string $currency
     * @return static
     */
    public function withCurrency(?string $currency) : static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }
}


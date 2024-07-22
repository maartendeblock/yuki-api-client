<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CurrenciesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResult $CurrenciesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResult
     */
    public function getCurrenciesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResult
    {
        return $this->CurrenciesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResult $CurrenciesResult
     * @return static
     */
    public function withCurrenciesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CurrenciesResult $CurrenciesResult) : static
    {
        $new = clone $this;
        $new->CurrenciesResult = $CurrenciesResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class NetRevenueFiscalResponse implements ResultInterface
{
    /**
     * @var float
     */
    private float $NetRevenueFiscalResult;

    /**
     * @return float
     */
    public function getNetRevenueFiscalResult() : float
    {
        return $this->NetRevenueFiscalResult;
    }

    /**
     * @param float $NetRevenueFiscalResult
     * @return static
     */
    public function withNetRevenueFiscalResult(float $NetRevenueFiscalResult) : static
    {
        $new = clone $this;
        $new->NetRevenueFiscalResult = $NetRevenueFiscalResult;

        return $new;
    }
}


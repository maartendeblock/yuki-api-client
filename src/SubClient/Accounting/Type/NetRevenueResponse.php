<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class NetRevenueResponse implements ResultInterface
{
    /**
     * @var float
     */
    private float $NetRevenueResult;

    /**
     * @return float
     */
    public function getNetRevenueResult() : float
    {
        return $this->NetRevenueResult;
    }

    /**
     * @param float $NetRevenueResult
     * @return static
     */
    public function withNetRevenueResult(float $NetRevenueResult) : static
    {
        $new = clone $this;
        $new->NetRevenueResult = $NetRevenueResult;

        return $new;
    }
}


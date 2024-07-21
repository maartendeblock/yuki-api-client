<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CheckOutstandingItemResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResult $CheckOutstandingItemResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResult
     */
    public function getCheckOutstandingItemResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResult
    {
        return $this->CheckOutstandingItemResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResult $CheckOutstandingItemResult
     * @return static
     */
    public function withCheckOutstandingItemResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemResult $CheckOutstandingItemResult) : static
    {
        $new = clone $this;
        $new->CheckOutstandingItemResult = $CheckOutstandingItemResult;

        return $new;
    }
}


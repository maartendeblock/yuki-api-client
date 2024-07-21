<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CheckOutstandingItemAdminResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResult $CheckOutstandingItemAdminResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResult
     */
    public function getCheckOutstandingItemAdminResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResult
    {
        return $this->CheckOutstandingItemAdminResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResult $CheckOutstandingItemAdminResult
     * @return static
     */
    public function withCheckOutstandingItemAdminResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\CheckOutstandingItemAdminResult $CheckOutstandingItemAdminResult) : static
    {
        $new = clone $this;
        $new->CheckOutstandingItemAdminResult = $CheckOutstandingItemAdminResult;

        return $new;
    }
}


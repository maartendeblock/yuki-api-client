<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OutstandingDebtorItemsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResult $OutstandingDebtorItemsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResult
     */
    public function getOutstandingDebtorItemsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResult
    {
        return $this->OutstandingDebtorItemsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResult $OutstandingDebtorItemsResult
     * @return static
     */
    public function withOutstandingDebtorItemsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsResult $OutstandingDebtorItemsResult) : static
    {
        $new = clone $this;
        $new->OutstandingDebtorItemsResult = $OutstandingDebtorItemsResult;

        return $new;
    }
}


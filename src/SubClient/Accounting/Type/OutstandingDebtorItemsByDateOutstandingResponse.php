<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OutstandingDebtorItemsByDateOutstandingResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResult $OutstandingDebtorItemsByDateOutstandingResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResult
     */
    public function getOutstandingDebtorItemsByDateOutstandingResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResult
    {
        return $this->OutstandingDebtorItemsByDateOutstandingResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResult $OutstandingDebtorItemsByDateOutstandingResult
     * @return static
     */
    public function withOutstandingDebtorItemsByDateOutstandingResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateOutstandingResult $OutstandingDebtorItemsByDateOutstandingResult) : static
    {
        $new = clone $this;
        $new->OutstandingDebtorItemsByDateOutstandingResult = $OutstandingDebtorItemsByDateOutstandingResult;

        return $new;
    }
}


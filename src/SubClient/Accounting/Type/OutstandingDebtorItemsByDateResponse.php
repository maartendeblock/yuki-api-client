<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OutstandingDebtorItemsByDateResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResult $OutstandingDebtorItemsByDateResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResult
     */
    public function getOutstandingDebtorItemsByDateResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResult
    {
        return $this->OutstandingDebtorItemsByDateResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResult $OutstandingDebtorItemsByDateResult
     * @return static
     */
    public function withOutstandingDebtorItemsByDateResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsByDateResult $OutstandingDebtorItemsByDateResult) : static
    {
        $new = clone $this;
        $new->OutstandingDebtorItemsByDateResult = $OutstandingDebtorItemsByDateResult;

        return $new;
    }
}


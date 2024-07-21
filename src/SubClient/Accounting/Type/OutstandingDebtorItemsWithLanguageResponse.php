<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OutstandingDebtorItemsWithLanguageResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResult $OutstandingDebtorItemsWithLanguageResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResult
     */
    public function getOutstandingDebtorItemsWithLanguageResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResult
    {
        return $this->OutstandingDebtorItemsWithLanguageResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResult $OutstandingDebtorItemsWithLanguageResult
     * @return static
     */
    public function withOutstandingDebtorItemsWithLanguageResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingDebtorItemsWithLanguageResult $OutstandingDebtorItemsWithLanguageResult) : static
    {
        $new = clone $this;
        $new->OutstandingDebtorItemsWithLanguageResult = $OutstandingDebtorItemsWithLanguageResult;

        return $new;
    }
}


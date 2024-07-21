<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTransactionsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransaction
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransaction $GetTransactionsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransaction
     */
    public function getGetTransactionsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransaction
    {
        return $this->GetTransactionsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransaction $GetTransactionsResult
     * @return static
     */
    public function withGetTransactionsResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransaction $GetTransactionsResult) : static
    {
        $new = clone $this;
        $new->GetTransactionsResult = $GetTransactionsResult;

        return $new;
    }
}


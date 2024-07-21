<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTransactionDetailsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionInfo
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionInfo $GetTransactionDetailsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionInfo
     */
    public function getGetTransactionDetailsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionInfo
    {
        return $this->GetTransactionDetailsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionInfo $GetTransactionDetailsResult
     * @return static
     */
    public function withGetTransactionDetailsResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionInfo $GetTransactionDetailsResult) : static
    {
        $new = clone $this;
        $new->GetTransactionDetailsResult = $GetTransactionDetailsResult;

        return $new;
    }
}


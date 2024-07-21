<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTransactionDocumentResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionDocument
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionDocument $GetTransactionDocumentResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionDocument
     */
    public function getGetTransactionDocumentResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionDocument
    {
        return $this->GetTransactionDocumentResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionDocument $GetTransactionDocumentResult
     * @return static
     */
    public function withGetTransactionDocumentResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\TransactionDocument $GetTransactionDocumentResult) : static
    {
        $new = clone $this;
        $new->GetTransactionDocumentResult = $GetTransactionDocumentResult;

        return $new;
    }
}


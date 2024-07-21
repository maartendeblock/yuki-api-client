<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessRecognizedSalesInvoicesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\ProcessRecognizedSalesInvoicesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\ProcessRecognizedSalesInvoicesResult $ProcessRecognizedSalesInvoicesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\ProcessRecognizedSalesInvoicesResult
     */
    public function getProcessRecognizedSalesInvoicesResult() : ?\MaartenDeBlock\YukiApiClient\Type\ProcessRecognizedSalesInvoicesResult
    {
        return $this->ProcessRecognizedSalesInvoicesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\ProcessRecognizedSalesInvoicesResult $ProcessRecognizedSalesInvoicesResult
     * @return static
     */
    public function withProcessRecognizedSalesInvoicesResult(?\MaartenDeBlock\YukiApiClient\Type\ProcessRecognizedSalesInvoicesResult $ProcessRecognizedSalesInvoicesResult) : static
    {
        $new = clone $this;
        $new->ProcessRecognizedSalesInvoicesResult = $ProcessRecognizedSalesInvoicesResult;

        return $new;
    }
}


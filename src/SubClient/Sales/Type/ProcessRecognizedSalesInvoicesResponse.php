<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessRecognizedSalesInvoicesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResult $ProcessRecognizedSalesInvoicesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResult
     */
    public function getProcessRecognizedSalesInvoicesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResult
    {
        return $this->ProcessRecognizedSalesInvoicesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResult $ProcessRecognizedSalesInvoicesResult
     * @return static
     */
    public function withProcessRecognizedSalesInvoicesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessRecognizedSalesInvoicesResult $ProcessRecognizedSalesInvoicesResult) : static
    {
        $new = clone $this;
        $new->ProcessRecognizedSalesInvoicesResult = $ProcessRecognizedSalesInvoicesResult;

        return $new;
    }
}


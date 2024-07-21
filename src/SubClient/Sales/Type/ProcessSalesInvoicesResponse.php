<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessSalesInvoicesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResult $ProcessSalesInvoicesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResult
     */
    public function getProcessSalesInvoicesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResult
    {
        return $this->ProcessSalesInvoicesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResult $ProcessSalesInvoicesResult
     * @return static
     */
    public function withProcessSalesInvoicesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ProcessSalesInvoicesResult $ProcessSalesInvoicesResult) : static
    {
        $new = clone $this;
        $new->ProcessSalesInvoicesResult = $ProcessSalesInvoicesResult;

        return $new;
    }
}


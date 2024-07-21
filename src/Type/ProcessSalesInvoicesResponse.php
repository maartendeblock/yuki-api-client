<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessSalesInvoicesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\ProcessSalesInvoicesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\ProcessSalesInvoicesResult $ProcessSalesInvoicesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\ProcessSalesInvoicesResult
     */
    public function getProcessSalesInvoicesResult() : ?\MaartenDeBlock\YukiApiClient\Type\ProcessSalesInvoicesResult
    {
        return $this->ProcessSalesInvoicesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\ProcessSalesInvoicesResult $ProcessSalesInvoicesResult
     * @return static
     */
    public function withProcessSalesInvoicesResult(?\MaartenDeBlock\YukiApiClient\Type\ProcessSalesInvoicesResult $ProcessSalesInvoicesResult) : static
    {
        $new = clone $this;
        $new->ProcessSalesInvoicesResult = $ProcessSalesInvoicesResult;

        return $new;
    }
}


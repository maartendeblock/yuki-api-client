<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessPurchaseInvoicesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\ProcessPurchaseInvoicesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\ProcessPurchaseInvoicesResult $ProcessPurchaseInvoicesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\ProcessPurchaseInvoicesResult
     */
    public function getProcessPurchaseInvoicesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\ProcessPurchaseInvoicesResult
    {
        return $this->ProcessPurchaseInvoicesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\ProcessPurchaseInvoicesResult $ProcessPurchaseInvoicesResult
     * @return static
     */
    public function withProcessPurchaseInvoicesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\ProcessPurchaseInvoicesResult $ProcessPurchaseInvoicesResult) : static
    {
        $new = clone $this;
        $new->ProcessPurchaseInvoicesResult = $ProcessPurchaseInvoicesResult;

        return $new;
    }
}


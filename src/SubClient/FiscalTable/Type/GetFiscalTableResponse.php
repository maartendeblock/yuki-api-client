<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetFiscalTableResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\FiscalTableTotals
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\FiscalTableTotals $GetFiscalTableResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\FiscalTableTotals
     */
    public function getGetFiscalTableResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\FiscalTableTotals
    {
        return $this->GetFiscalTableResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\FiscalTableTotals $GetFiscalTableResult
     * @return static
     */
    public function withGetFiscalTableResult(?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\FiscalTableTotals $GetFiscalTableResult) : static
    {
        $new = clone $this;
        $new->GetFiscalTableResult = $GetFiscalTableResult;

        return $new;
    }
}


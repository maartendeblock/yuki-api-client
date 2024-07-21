<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DomainsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\DomainsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\DomainsResult $DomainsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\DomainsResult
     */
    public function getDomainsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\DomainsResult
    {
        return $this->DomainsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\DomainsResult $DomainsResult
     * @return static
     */
    public function withDomainsResult(?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\DomainsResult $DomainsResult) : static
    {
        $new = clone $this;
        $new->DomainsResult = $DomainsResult;

        return $new;
    }
}


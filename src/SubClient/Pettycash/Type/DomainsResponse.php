<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DomainsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\DomainsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\DomainsResult $DomainsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\DomainsResult
     */
    public function getDomainsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\DomainsResult
    {
        return $this->DomainsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\DomainsResult $DomainsResult
     * @return static
     */
    public function withDomainsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\DomainsResult $DomainsResult) : static
    {
        $new = clone $this;
        $new->DomainsResult = $DomainsResult;

        return $new;
    }
}


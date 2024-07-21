<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DomainsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\DomainsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\DomainsResult $DomainsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\DomainsResult
     */
    public function getDomainsResult() : ?\MaartenDeBlock\YukiApiClient\Type\DomainsResult
    {
        return $this->DomainsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\DomainsResult $DomainsResult
     * @return static
     */
    public function withDomainsResult(?\MaartenDeBlock\YukiApiClient\Type\DomainsResult $DomainsResult) : static
    {
        $new = clone $this;
        $new->DomainsResult = $DomainsResult;

        return $new;
    }
}


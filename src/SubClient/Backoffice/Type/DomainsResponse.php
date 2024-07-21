<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DomainsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\DomainsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\DomainsResult $DomainsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\DomainsResult
     */
    public function getDomainsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\DomainsResult
    {
        return $this->DomainsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\DomainsResult $DomainsResult
     * @return static
     */
    public function withDomainsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\DomainsResult $DomainsResult) : static
    {
        $new = clone $this;
        $new->DomainsResult = $DomainsResult;

        return $new;
    }
}


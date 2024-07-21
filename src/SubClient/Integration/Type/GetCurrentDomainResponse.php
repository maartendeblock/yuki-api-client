<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Integration\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCurrentDomainResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResult $GetCurrentDomainResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResult
     */
    public function getGetCurrentDomainResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResult
    {
        return $this->GetCurrentDomainResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResult $GetCurrentDomainResult
     * @return static
     */
    public function withGetCurrentDomainResult(?\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\GetCurrentDomainResult $GetCurrentDomainResult) : static
    {
        $new = clone $this;
        $new->GetCurrentDomainResult = $GetCurrentDomainResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCurrentDomainResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\GetCurrentDomainResult
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\GetCurrentDomainResult $GetCurrentDomainResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\GetCurrentDomainResult
     */
    public function getGetCurrentDomainResult() : ?\MaartenDeBlock\YukiApiClient\Type\GetCurrentDomainResult
    {
        return $this->GetCurrentDomainResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\GetCurrentDomainResult $GetCurrentDomainResult
     * @return static
     */
    public function withGetCurrentDomainResult(?\MaartenDeBlock\YukiApiClient\Type\GetCurrentDomainResult $GetCurrentDomainResult) : static
    {
        $new = clone $this;
        $new->GetCurrentDomainResult = $GetCurrentDomainResult;

        return $new;
    }
}


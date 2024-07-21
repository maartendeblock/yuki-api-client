<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCurrentDomainResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResult $GetCurrentDomainResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResult
     */
    public function getGetCurrentDomainResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResult
    {
        return $this->GetCurrentDomainResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResult $GetCurrentDomainResult
     * @return static
     */
    public function withGetCurrentDomainResult(?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetCurrentDomainResult $GetCurrentDomainResult) : static
    {
        $new = clone $this;
        $new->GetCurrentDomainResult = $GetCurrentDomainResult;

        return $new;
    }
}


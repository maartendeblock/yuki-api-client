<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCurrentDomainResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResult $GetCurrentDomainResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResult
     */
    public function getGetCurrentDomainResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResult
    {
        return $this->GetCurrentDomainResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResult $GetCurrentDomainResult
     * @return static
     */
    public function withGetCurrentDomainResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GetCurrentDomainResult $GetCurrentDomainResult) : static
    {
        $new = clone $this;
        $new->GetCurrentDomainResult = $GetCurrentDomainResult;

        return $new;
    }
}


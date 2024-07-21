<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCurrentDomainResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResult $GetCurrentDomainResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResult
     */
    public function getGetCurrentDomainResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResult
    {
        return $this->GetCurrentDomainResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResult $GetCurrentDomainResult
     * @return static
     */
    public function withGetCurrentDomainResult(?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\GetCurrentDomainResult $GetCurrentDomainResult) : static
    {
        $new = clone $this;
        $new->GetCurrentDomainResult = $GetCurrentDomainResult;

        return $new;
    }
}


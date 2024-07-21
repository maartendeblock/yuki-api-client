<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainFunctionsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResult $GetDomainFunctionsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResult
     */
    public function getGetDomainFunctionsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResult
    {
        return $this->GetDomainFunctionsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResult $GetDomainFunctionsResult
     * @return static
     */
    public function withGetDomainFunctionsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainFunctionsResult $GetDomainFunctionsResult) : static
    {
        $new = clone $this;
        $new->GetDomainFunctionsResult = $GetDomainFunctionsResult;

        return $new;
    }
}


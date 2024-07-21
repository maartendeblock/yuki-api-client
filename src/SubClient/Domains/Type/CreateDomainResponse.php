<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateDomainResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResult $CreateDomainResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResult
     */
    public function getCreateDomainResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResult
    {
        return $this->CreateDomainResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResult $CreateDomainResult
     * @return static
     */
    public function withCreateDomainResult(?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateDomainResult $CreateDomainResult) : static
    {
        $new = clone $this;
        $new->CreateDomainResult = $CreateDomainResult;

        return $new;
    }
}


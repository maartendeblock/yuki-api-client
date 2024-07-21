<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateTrialDomainResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResult $CreateTrialDomainResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResult
     */
    public function getCreateTrialDomainResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResult
    {
        return $this->CreateTrialDomainResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResult $CreateTrialDomainResult
     * @return static
     */
    public function withCreateTrialDomainResult(?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\CreateTrialDomainResult $CreateTrialDomainResult) : static
    {
        $new = clone $this;
        $new->CreateTrialDomainResult = $CreateTrialDomainResult;

        return $new;
    }
}


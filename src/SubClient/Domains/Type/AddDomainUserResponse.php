<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddDomainUserResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResult $AddDomainUserResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResult
     */
    public function getAddDomainUserResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResult
    {
        return $this->AddDomainUserResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResult $AddDomainUserResult
     * @return static
     */
    public function withAddDomainUserResult(?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AddDomainUserResult $AddDomainUserResult) : static
    {
        $new = clone $this;
        $new->AddDomainUserResult = $AddDomainUserResult;

        return $new;
    }
}


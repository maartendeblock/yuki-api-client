<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainUsersResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResult $GetDomainUsersResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResult
     */
    public function getGetDomainUsersResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResult
    {
        return $this->GetDomainUsersResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResult $GetDomainUsersResult
     * @return static
     */
    public function withGetDomainUsersResult(?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\GetDomainUsersResult $GetDomainUsersResult) : static
    {
        $new = clone $this;
        $new->GetDomainUsersResult = $GetDomainUsersResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetDomainNameResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $GetDomainNameResult = null;

    /**
     * @return null | string
     */
    public function getGetDomainNameResult() : ?string
    {
        return $this->GetDomainNameResult;
    }

    /**
     * @param null | string $GetDomainNameResult
     * @return static
     */
    public function withGetDomainNameResult(?string $GetDomainNameResult) : static
    {
        $new = clone $this;
        $new->GetDomainNameResult = $GetDomainNameResult;

        return $new;
    }
}


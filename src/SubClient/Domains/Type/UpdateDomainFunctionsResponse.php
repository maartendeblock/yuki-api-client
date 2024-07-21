<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateDomainFunctionsResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $UpdateDomainFunctionsResult = null;

    /**
     * @return null | string
     */
    public function getUpdateDomainFunctionsResult() : ?string
    {
        return $this->UpdateDomainFunctionsResult;
    }

    /**
     * @param null | string $UpdateDomainFunctionsResult
     * @return static
     */
    public function withUpdateDomainFunctionsResult(?string $UpdateDomainFunctionsResult) : static
    {
        $new = clone $this;
        $new->UpdateDomainFunctionsResult = $UpdateDomainFunctionsResult;

        return $new;
    }
}


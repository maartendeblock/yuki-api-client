<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AuthenticateClientResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $AuthenticateClientResult = null;

    /**
     * @return null | string
     */
    public function getAuthenticateClientResult() : ?string
    {
        return $this->AuthenticateClientResult;
    }

    /**
     * @param null | string $AuthenticateClientResult
     * @return static
     */
    public function withAuthenticateClientResult(?string $AuthenticateClientResult) : static
    {
        $new = clone $this;
        $new->AuthenticateClientResult = $AuthenticateClientResult;

        return $new;
    }
}


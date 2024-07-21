<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AuthenticateResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $AuthenticateResult = null;

    /**
     * @return null | string
     */
    public function getAuthenticateResult() : ?string
    {
        return $this->AuthenticateResult;
    }

    /**
     * @param null | string $AuthenticateResult
     * @return static
     */
    public function withAuthenticateResult(?string $AuthenticateResult) : static
    {
        $new = clone $this;
        $new->AuthenticateResult = $AuthenticateResult;

        return $new;
    }
}


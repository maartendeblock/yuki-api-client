<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AuthenticateByUserNameResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $AuthenticateByUserNameResult = null;

    /**
     * @return null | string
     */
    public function getAuthenticateByUserNameResult() : ?string
    {
        return $this->AuthenticateByUserNameResult;
    }

    /**
     * @param null | string $AuthenticateByUserNameResult
     * @return static
     */
    public function withAuthenticateByUserNameResult(?string $AuthenticateByUserNameResult) : static
    {
        $new = clone $this;
        $new->AuthenticateByUserNameResult = $AuthenticateByUserNameResult;

        return $new;
    }
}


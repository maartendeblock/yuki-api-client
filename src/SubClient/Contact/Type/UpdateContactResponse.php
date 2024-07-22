<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Contact\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateContactResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\UpdateContactResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\UpdateContactResult $UpdateContactResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\UpdateContactResult
     */
    public function getUpdateContactResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\UpdateContactResult
    {
        return $this->UpdateContactResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\UpdateContactResult $UpdateContactResult
     * @return static
     */
    public function withUpdateContactResult(?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\UpdateContactResult $UpdateContactResult) : static
    {
        $new = clone $this;
        $new->UpdateContactResult = $UpdateContactResult;

        return $new;
    }
}


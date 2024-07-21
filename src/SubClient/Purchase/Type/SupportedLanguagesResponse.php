<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SupportedLanguagesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\SupportedLanguagesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\SupportedLanguagesResult $SupportedLanguagesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\SupportedLanguagesResult
     */
    public function getSupportedLanguagesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\SupportedLanguagesResult
    {
        return $this->SupportedLanguagesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\SupportedLanguagesResult $SupportedLanguagesResult
     * @return static
     */
    public function withSupportedLanguagesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\SupportedLanguagesResult $SupportedLanguagesResult) : static
    {
        $new = clone $this;
        $new->SupportedLanguagesResult = $SupportedLanguagesResult;

        return $new;
    }
}


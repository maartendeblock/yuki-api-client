<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SupportedLanguagesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\SupportedLanguagesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\SupportedLanguagesResult $SupportedLanguagesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\SupportedLanguagesResult
     */
    public function getSupportedLanguagesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\SupportedLanguagesResult
    {
        return $this->SupportedLanguagesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\SupportedLanguagesResult $SupportedLanguagesResult
     * @return static
     */
    public function withSupportedLanguagesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\SupportedLanguagesResult $SupportedLanguagesResult) : static
    {
        $new = clone $this;
        $new->SupportedLanguagesResult = $SupportedLanguagesResult;

        return $new;
    }
}


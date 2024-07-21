<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SupportedLanguagesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\SupportedLanguagesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\SupportedLanguagesResult $SupportedLanguagesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\SupportedLanguagesResult
     */
    public function getSupportedLanguagesResult() : ?\MaartenDeBlock\YukiApiClient\Type\SupportedLanguagesResult
    {
        return $this->SupportedLanguagesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\SupportedLanguagesResult $SupportedLanguagesResult
     * @return static
     */
    public function withSupportedLanguagesResult(?\MaartenDeBlock\YukiApiClient\Type\SupportedLanguagesResult $SupportedLanguagesResult) : static
    {
        $new = clone $this;
        $new->SupportedLanguagesResult = $SupportedLanguagesResult;

        return $new;
    }
}


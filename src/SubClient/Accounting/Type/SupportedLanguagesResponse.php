<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SupportedLanguagesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResult $SupportedLanguagesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResult
     */
    public function getSupportedLanguagesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResult
    {
        return $this->SupportedLanguagesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResult $SupportedLanguagesResult
     * @return static
     */
    public function withSupportedLanguagesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\SupportedLanguagesResult $SupportedLanguagesResult) : static
    {
        $new = clone $this;
        $new->SupportedLanguagesResult = $SupportedLanguagesResult;

        return $new;
    }
}


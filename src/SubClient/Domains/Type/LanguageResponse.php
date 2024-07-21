<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LanguageResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $LanguageResult = null;

    /**
     * @return null | string
     */
    public function getLanguageResult() : ?string
    {
        return $this->LanguageResult;
    }

    /**
     * @param null | string $LanguageResult
     * @return static
     */
    public function withLanguageResult(?string $LanguageResult) : static
    {
        $new = clone $this;
        $new->LanguageResult = $LanguageResult;

        return $new;
    }
}


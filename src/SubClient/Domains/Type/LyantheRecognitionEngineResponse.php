<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LyantheRecognitionEngineResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $LyantheRecognitionEngineResult = null;

    /**
     * @return null | string
     */
    public function getLyantheRecognitionEngineResult() : ?string
    {
        return $this->LyantheRecognitionEngineResult;
    }

    /**
     * @param null | string $LyantheRecognitionEngineResult
     * @return static
     */
    public function withLyantheRecognitionEngineResult(?string $LyantheRecognitionEngineResult) : static
    {
        $new = clone $this;
        $new->LyantheRecognitionEngineResult = $LyantheRecognitionEngineResult;

        return $new;
    }
}


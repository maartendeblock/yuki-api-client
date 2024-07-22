<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentImageResponse implements ResultInterface
{
    /**
     * @var null | mixed
     */
    private mixed $DocumentImageResult = null;

    /**
     * @return null | mixed
     */
    public function getDocumentImageResult() : mixed
    {
        return $this->DocumentImageResult;
    }

    /**
     * @param null | mixed $DocumentImageResult
     * @return static
     */
    public function withDocumentImageResult(mixed $DocumentImageResult) : static
    {
        $new = clone $this;
        $new->DocumentImageResult = $DocumentImageResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentBinaryDataResponse implements ResultInterface
{
    /**
     * @var null | mixed
     */
    private mixed $DocumentBinaryDataResult = null;

    /**
     * @return null | mixed
     */
    public function getDocumentBinaryDataResult() : mixed
    {
        return $this->DocumentBinaryDataResult;
    }

    /**
     * @param null | mixed $DocumentBinaryDataResult
     * @return static
     */
    public function withDocumentBinaryDataResult(mixed $DocumentBinaryDataResult) : static
    {
        $new = clone $this;
        $new->DocumentBinaryDataResult = $DocumentBinaryDataResult;

        return $new;
    }
}


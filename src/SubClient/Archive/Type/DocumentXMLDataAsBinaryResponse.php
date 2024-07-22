<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentXMLDataAsBinaryResponse implements ResultInterface
{
    /**
     * @var null | mixed
     */
    private mixed $DocumentXMLDataAsBinaryResult = null;

    /**
     * @return null | mixed
     */
    public function getDocumentXMLDataAsBinaryResult() : mixed
    {
        return $this->DocumentXMLDataAsBinaryResult;
    }

    /**
     * @param null | mixed $DocumentXMLDataAsBinaryResult
     * @return static
     */
    public function withDocumentXMLDataAsBinaryResult(mixed $DocumentXMLDataAsBinaryResult) : static
    {
        $new = clone $this;
        $new->DocumentXMLDataAsBinaryResult = $DocumentXMLDataAsBinaryResult;

        return $new;
    }
}


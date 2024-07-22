<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentXMLDataAsStringResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $DocumentXMLDataAsStringResult = null;

    /**
     * @return null | string
     */
    public function getDocumentXMLDataAsStringResult() : ?string
    {
        return $this->DocumentXMLDataAsStringResult;
    }

    /**
     * @param null | string $DocumentXMLDataAsStringResult
     * @return static
     */
    public function withDocumentXMLDataAsStringResult(?string $DocumentXMLDataAsStringResult) : static
    {
        $new = clone $this;
        $new->DocumentXMLDataAsStringResult = $DocumentXMLDataAsStringResult;

        return $new;
    }
}


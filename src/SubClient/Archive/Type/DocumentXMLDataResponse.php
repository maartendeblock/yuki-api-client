<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentXMLDataResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResult $DocumentXMLDataResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResult
     */
    public function getDocumentXMLDataResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResult
    {
        return $this->DocumentXMLDataResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResult $DocumentXMLDataResult
     * @return static
     */
    public function withDocumentXMLDataResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentXMLDataResult $DocumentXMLDataResult) : static
    {
        $new = clone $this;
        $new->DocumentXMLDataResult = $DocumentXMLDataResult;

        return $new;
    }
}


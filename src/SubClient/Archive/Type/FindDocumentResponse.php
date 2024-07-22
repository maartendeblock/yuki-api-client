<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FindDocumentResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResult $FindDocumentResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResult
     */
    public function getFindDocumentResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResult
    {
        return $this->FindDocumentResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResult $FindDocumentResult
     * @return static
     */
    public function withFindDocumentResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\FindDocumentResult $FindDocumentResult) : static
    {
        $new = clone $this;
        $new->FindDocumentResult = $FindDocumentResult;

        return $new;
    }
}


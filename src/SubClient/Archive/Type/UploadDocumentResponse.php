<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UploadDocumentResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $UploadDocumentResult = null;

    /**
     * @return null | string
     */
    public function getUploadDocumentResult() : ?string
    {
        return $this->UploadDocumentResult;
    }

    /**
     * @param null | string $UploadDocumentResult
     * @return static
     */
    public function withUploadDocumentResult(?string $UploadDocumentResult) : static
    {
        $new = clone $this;
        $new->UploadDocumentResult = $UploadDocumentResult;

        return $new;
    }
}


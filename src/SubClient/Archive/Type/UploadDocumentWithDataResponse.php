<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UploadDocumentWithDataResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $UploadDocumentWithDataResult = null;

    /**
     * @return null | string
     */
    public function getUploadDocumentWithDataResult() : ?string
    {
        return $this->UploadDocumentWithDataResult;
    }

    /**
     * @param null | string $UploadDocumentWithDataResult
     * @return static
     */
    public function withUploadDocumentWithDataResult(?string $UploadDocumentWithDataResult) : static
    {
        $new = clone $this;
        $new->UploadDocumentWithDataResult = $UploadDocumentWithDataResult;

        return $new;
    }
}


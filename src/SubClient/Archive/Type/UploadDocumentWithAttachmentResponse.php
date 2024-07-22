<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UploadDocumentWithAttachmentResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $UploadDocumentWithAttachmentResult = null;

    /**
     * @return null | string
     */
    public function getUploadDocumentWithAttachmentResult() : ?string
    {
        return $this->UploadDocumentWithAttachmentResult;
    }

    /**
     * @param null | string $UploadDocumentWithAttachmentResult
     * @return static
     */
    public function withUploadDocumentWithAttachmentResult(?string $UploadDocumentWithAttachmentResult) : static
    {
        $new = clone $this;
        $new->UploadDocumentWithAttachmentResult = $UploadDocumentWithAttachmentResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResult $DocumentsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResult
     */
    public function getDocumentsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResult
    {
        return $this->DocumentsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResult $DocumentsResult
     * @return static
     */
    public function withDocumentsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsResult $DocumentsResult) : static
    {
        $new = clone $this;
        $new->DocumentsResult = $DocumentsResult;

        return $new;
    }
}


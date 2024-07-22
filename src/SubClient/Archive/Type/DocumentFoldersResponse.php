<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentFoldersResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResult $DocumentFoldersResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResult
     */
    public function getDocumentFoldersResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResult
    {
        return $this->DocumentFoldersResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResult $DocumentFoldersResult
     * @return static
     */
    public function withDocumentFoldersResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFoldersResult $DocumentFoldersResult) : static
    {
        $new = clone $this;
        $new->DocumentFoldersResult = $DocumentFoldersResult;

        return $new;
    }
}


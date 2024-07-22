<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentsInFolderResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResult $DocumentsInFolderResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResult
     */
    public function getDocumentsInFolderResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResult
    {
        return $this->DocumentsInFolderResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResult $DocumentsInFolderResult
     * @return static
     */
    public function withDocumentsInFolderResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInFolderResult $DocumentsInFolderResult) : static
    {
        $new = clone $this;
        $new->DocumentsInFolderResult = $DocumentsInFolderResult;

        return $new;
    }
}


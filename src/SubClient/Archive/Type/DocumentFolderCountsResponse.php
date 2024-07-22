<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentFolderCountsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResult $DocumentFolderCountsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResult
     */
    public function getDocumentFolderCountsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResult
    {
        return $this->DocumentFolderCountsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResult $DocumentFolderCountsResult
     * @return static
     */
    public function withDocumentFolderCountsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderCountsResult $DocumentFolderCountsResult) : static
    {
        $new = clone $this;
        $new->DocumentFolderCountsResult = $DocumentFolderCountsResult;

        return $new;
    }
}


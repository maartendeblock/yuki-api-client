<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentFolderTabsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResult $DocumentFolderTabsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResult
     */
    public function getDocumentFolderTabsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResult
    {
        return $this->DocumentFolderTabsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResult $DocumentFolderTabsResult
     * @return static
     */
    public function withDocumentFolderTabsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFolderTabsResult $DocumentFolderTabsResult) : static
    {
        $new = clone $this;
        $new->DocumentFolderTabsResult = $DocumentFolderTabsResult;

        return $new;
    }
}


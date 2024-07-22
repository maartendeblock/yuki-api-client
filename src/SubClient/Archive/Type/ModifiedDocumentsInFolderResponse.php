<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ModifiedDocumentsInFolderResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResult $ModifiedDocumentsInFolderResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResult
     */
    public function getModifiedDocumentsInFolderResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResult
    {
        return $this->ModifiedDocumentsInFolderResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResult $ModifiedDocumentsInFolderResult
     * @return static
     */
    public function withModifiedDocumentsInFolderResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsInFolderResult $ModifiedDocumentsInFolderResult) : static
    {
        $new = clone $this;
        $new->ModifiedDocumentsInFolderResult = $ModifiedDocumentsInFolderResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchDocumentsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResult $SearchDocumentsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResult
     */
    public function getSearchDocumentsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResult
    {
        return $this->SearchDocumentsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResult $SearchDocumentsResult
     * @return static
     */
    public function withSearchDocumentsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\SearchDocumentsResult $SearchDocumentsResult) : static
    {
        $new = clone $this;
        $new->SearchDocumentsResult = $SearchDocumentsResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentFileResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResult $DocumentFileResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResult
     */
    public function getDocumentFileResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResult
    {
        return $this->DocumentFileResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResult $DocumentFileResult
     * @return static
     */
    public function withDocumentFileResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentFileResult $DocumentFileResult) : static
    {
        $new = clone $this;
        $new->DocumentFileResult = $DocumentFileResult;

        return $new;
    }
}


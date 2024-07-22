<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentsInTabResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResult $DocumentsInTabResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResult
     */
    public function getDocumentsInTabResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResult
    {
        return $this->DocumentsInTabResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResult $DocumentsInTabResult
     * @return static
     */
    public function withDocumentsInTabResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsInTabResult $DocumentsInTabResult) : static
    {
        $new = clone $this;
        $new->DocumentsInTabResult = $DocumentsInTabResult;

        return $new;
    }
}


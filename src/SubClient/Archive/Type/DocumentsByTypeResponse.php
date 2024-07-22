<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentsByTypeResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResult $DocumentsByTypeResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResult
     */
    public function getDocumentsByTypeResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResult
    {
        return $this->DocumentsByTypeResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResult $DocumentsByTypeResult
     * @return static
     */
    public function withDocumentsByTypeResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentsByTypeResult $DocumentsByTypeResult) : static
    {
        $new = clone $this;
        $new->DocumentsByTypeResult = $DocumentsByTypeResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ModifiedDocumentsByTypeResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResult $ModifiedDocumentsByTypeResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResult
     */
    public function getModifiedDocumentsByTypeResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResult
    {
        return $this->ModifiedDocumentsByTypeResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResult $ModifiedDocumentsByTypeResult
     * @return static
     */
    public function withModifiedDocumentsByTypeResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ModifiedDocumentsByTypeResult $ModifiedDocumentsByTypeResult) : static
    {
        $new = clone $this;
        $new->ModifiedDocumentsByTypeResult = $ModifiedDocumentsByTypeResult;

        return $new;
    }
}


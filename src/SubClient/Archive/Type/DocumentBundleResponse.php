<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentBundleResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResult $DocumentBundleResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResult
     */
    public function getDocumentBundleResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResult
    {
        return $this->DocumentBundleResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResult $DocumentBundleResult
     * @return static
     */
    public function withDocumentBundleResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\DocumentBundleResult $DocumentBundleResult) : static
    {
        $new = clone $this;
        $new->DocumentBundleResult = $DocumentBundleResult;

        return $new;
    }
}


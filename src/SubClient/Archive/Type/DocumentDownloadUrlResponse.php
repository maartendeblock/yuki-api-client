<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentDownloadUrlResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $DocumentDownloadUrlResult = null;

    /**
     * @return null | string
     */
    public function getDocumentDownloadUrlResult() : ?string
    {
        return $this->DocumentDownloadUrlResult;
    }

    /**
     * @param null | string $DocumentDownloadUrlResult
     * @return static
     */
    public function withDocumentDownloadUrlResult(?string $DocumentDownloadUrlResult) : static
    {
        $new = clone $this;
        $new->DocumentDownloadUrlResult = $DocumentDownloadUrlResult;

        return $new;
    }
}


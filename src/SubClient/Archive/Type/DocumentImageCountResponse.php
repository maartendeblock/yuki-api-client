<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DocumentImageCountResponse implements ResultInterface
{
    /**
     * @var int
     */
    private int $DocumentImageCountResult;

    /**
     * @return int
     */
    public function getDocumentImageCountResult() : int
    {
        return $this->DocumentImageCountResult;
    }

    /**
     * @param int $DocumentImageCountResult
     * @return static
     */
    public function withDocumentImageCountResult(int $DocumentImageCountResult) : static
    {
        $new = clone $this;
        $new->DocumentImageCountResult = $DocumentImageCountResult;

        return $new;
    }
}


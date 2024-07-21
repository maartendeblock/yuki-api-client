<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OutstandingCreditorItemsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResult $OutstandingCreditorItemsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResult
     */
    public function getOutstandingCreditorItemsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResult
    {
        return $this->OutstandingCreditorItemsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResult $OutstandingCreditorItemsResult
     * @return static
     */
    public function withOutstandingCreditorItemsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsResult $OutstandingCreditorItemsResult) : static
    {
        $new = clone $this;
        $new->OutstandingCreditorItemsResult = $OutstandingCreditorItemsResult;

        return $new;
    }
}


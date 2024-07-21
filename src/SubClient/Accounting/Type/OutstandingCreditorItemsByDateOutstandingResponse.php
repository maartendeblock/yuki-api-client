<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OutstandingCreditorItemsByDateOutstandingResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResult $OutstandingCreditorItemsByDateOutstandingResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResult
     */
    public function getOutstandingCreditorItemsByDateOutstandingResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResult
    {
        return $this->OutstandingCreditorItemsByDateOutstandingResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResult $OutstandingCreditorItemsByDateOutstandingResult
     * @return static
     */
    public function withOutstandingCreditorItemsByDateOutstandingResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateOutstandingResult $OutstandingCreditorItemsByDateOutstandingResult) : static
    {
        $new = clone $this;
        $new->OutstandingCreditorItemsByDateOutstandingResult = $OutstandingCreditorItemsByDateOutstandingResult;

        return $new;
    }
}


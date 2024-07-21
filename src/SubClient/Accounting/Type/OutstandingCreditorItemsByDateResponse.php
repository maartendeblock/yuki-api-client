<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class OutstandingCreditorItemsByDateResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResult $OutstandingCreditorItemsByDateResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResult
     */
    public function getOutstandingCreditorItemsByDateResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResult
    {
        return $this->OutstandingCreditorItemsByDateResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResult $OutstandingCreditorItemsByDateResult
     * @return static
     */
    public function withOutstandingCreditorItemsByDateResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\OutstandingCreditorItemsByDateResult $OutstandingCreditorItemsByDateResult) : static
    {
        $new = clone $this;
        $new->OutstandingCreditorItemsByDateResult = $OutstandingCreditorItemsByDateResult;

        return $new;
    }
}


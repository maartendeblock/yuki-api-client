<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ImportStatementResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportStatementResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportStatementResult $ImportStatementResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportStatementResult
     */
    public function getImportStatementResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportStatementResult
    {
        return $this->ImportStatementResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportStatementResult $ImportStatementResult
     * @return static
     */
    public function withImportStatementResult(?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportStatementResult $ImportStatementResult) : static
    {
        $new = clone $this;
        $new->ImportStatementResult = $ImportStatementResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ImportSingleStatementLineResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementLineResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementLineResult $ImportSingleStatementLineResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementLineResult
     */
    public function getImportSingleStatementLineResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementLineResult
    {
        return $this->ImportSingleStatementLineResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementLineResult $ImportSingleStatementLineResult
     * @return static
     */
    public function withImportSingleStatementLineResult(?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementLineResult $ImportSingleStatementLineResult) : static
    {
        $new = clone $this;
        $new->ImportSingleStatementLineResult = $ImportSingleStatementLineResult;

        return $new;
    }
}


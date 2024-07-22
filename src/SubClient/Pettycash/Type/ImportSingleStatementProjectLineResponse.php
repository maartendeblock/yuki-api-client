<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ImportSingleStatementProjectLineResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementProjectLineResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementProjectLineResult $ImportSingleStatementProjectLineResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementProjectLineResult
     */
    public function getImportSingleStatementProjectLineResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementProjectLineResult
    {
        return $this->ImportSingleStatementProjectLineResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementProjectLineResult $ImportSingleStatementProjectLineResult
     * @return static
     */
    public function withImportSingleStatementProjectLineResult(?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\ImportSingleStatementProjectLineResult $ImportSingleStatementProjectLineResult) : static
    {
        $new = clone $this;
        $new->ImportSingleStatementProjectLineResult = $ImportSingleStatementProjectLineResult;

        return $new;
    }
}


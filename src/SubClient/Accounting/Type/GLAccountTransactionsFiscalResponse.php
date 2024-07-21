<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GLAccountTransactionsFiscalResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResult $GLAccountTransactionsFiscalResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResult
     */
    public function getGLAccountTransactionsFiscalResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResult
    {
        return $this->GLAccountTransactionsFiscalResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResult $GLAccountTransactionsFiscalResult
     * @return static
     */
    public function withGLAccountTransactionsFiscalResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsFiscalResult $GLAccountTransactionsFiscalResult) : static
    {
        $new = clone $this;
        $new->GLAccountTransactionsFiscalResult = $GLAccountTransactionsFiscalResult;

        return $new;
    }
}


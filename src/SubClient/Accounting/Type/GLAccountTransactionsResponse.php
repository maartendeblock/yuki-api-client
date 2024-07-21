<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GLAccountTransactionsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResult $GLAccountTransactionsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResult
     */
    public function getGLAccountTransactionsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResult
    {
        return $this->GLAccountTransactionsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResult $GLAccountTransactionsResult
     * @return static
     */
    public function withGLAccountTransactionsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsResult $GLAccountTransactionsResult) : static
    {
        $new = clone $this;
        $new->GLAccountTransactionsResult = $GLAccountTransactionsResult;

        return $new;
    }
}


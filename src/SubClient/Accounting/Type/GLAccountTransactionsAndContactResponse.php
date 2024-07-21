<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GLAccountTransactionsAndContactResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResult $GLAccountTransactionsAndContactResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResult
     */
    public function getGLAccountTransactionsAndContactResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResult
    {
        return $this->GLAccountTransactionsAndContactResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResult $GLAccountTransactionsAndContactResult
     * @return static
     */
    public function withGLAccountTransactionsAndContactResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountTransactionsAndContactResult $GLAccountTransactionsAndContactResult) : static
    {
        $new = clone $this;
        $new->GLAccountTransactionsAndContactResult = $GLAccountTransactionsAndContactResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GLAccountBalanceResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResult $GLAccountBalanceResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResult
     */
    public function getGLAccountBalanceResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResult
    {
        return $this->GLAccountBalanceResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResult $GLAccountBalanceResult
     * @return static
     */
    public function withGLAccountBalanceResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceResult $GLAccountBalanceResult) : static
    {
        $new = clone $this;
        $new->GLAccountBalanceResult = $GLAccountBalanceResult;

        return $new;
    }
}


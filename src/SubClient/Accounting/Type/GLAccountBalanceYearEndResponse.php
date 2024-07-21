<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GLAccountBalanceYearEndResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResult $GLAccountBalanceYearEndResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResult
     */
    public function getGLAccountBalanceYearEndResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResult
    {
        return $this->GLAccountBalanceYearEndResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResult $GLAccountBalanceYearEndResult
     * @return static
     */
    public function withGLAccountBalanceYearEndResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceYearEndResult $GLAccountBalanceYearEndResult) : static
    {
        $new = clone $this;
        $new->GLAccountBalanceYearEndResult = $GLAccountBalanceYearEndResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GLAccountBalanceFiscalResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResult $GLAccountBalanceFiscalResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResult
     */
    public function getGLAccountBalanceFiscalResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResult
    {
        return $this->GLAccountBalanceFiscalResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResult $GLAccountBalanceFiscalResult
     * @return static
     */
    public function withGLAccountBalanceFiscalResult(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\GLAccountBalanceFiscalResult $GLAccountBalanceFiscalResult) : static
    {
        $new = clone $this;
        $new->GLAccountBalanceFiscalResult = $GLAccountBalanceFiscalResult;

        return $new;
    }
}


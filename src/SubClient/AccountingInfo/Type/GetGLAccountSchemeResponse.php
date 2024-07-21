<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetGLAccountSchemeResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfGlAccount
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfGlAccount $GetGLAccountSchemeResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfGlAccount
     */
    public function getGetGLAccountSchemeResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfGlAccount
    {
        return $this->GetGLAccountSchemeResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfGlAccount $GetGLAccountSchemeResult
     * @return static
     */
    public function withGetGLAccountSchemeResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfGlAccount $GetGLAccountSchemeResult) : static
    {
        $new = clone $this;
        $new->GetGLAccountSchemeResult = $GetGLAccountSchemeResult;

        return $new;
    }
}


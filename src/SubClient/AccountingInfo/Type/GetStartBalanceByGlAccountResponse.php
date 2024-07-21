<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStartBalanceByGlAccountResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfAccountStartBalance
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfAccountStartBalance $GetStartBalanceByGlAccountResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfAccountStartBalance
     */
    public function getGetStartBalanceByGlAccountResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfAccountStartBalance
    {
        return $this->GetStartBalanceByGlAccountResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfAccountStartBalance $GetStartBalanceByGlAccountResult
     * @return static
     */
    public function withGetStartBalanceByGlAccountResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfAccountStartBalance $GetStartBalanceByGlAccountResult) : static
    {
        $new = clone $this;
        $new->GetStartBalanceByGlAccountResult = $GetStartBalanceByGlAccountResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProjectBalanceResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProjectBalance
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProjectBalance $GetProjectBalanceResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProjectBalance
     */
    public function getGetProjectBalanceResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProjectBalance
    {
        return $this->GetProjectBalanceResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProjectBalance $GetProjectBalanceResult
     * @return static
     */
    public function withGetProjectBalanceResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProjectBalance $GetProjectBalanceResult) : static
    {
        $new = clone $this;
        $new->GetProjectBalanceResult = $GetProjectBalanceResult;

        return $new;
    }
}


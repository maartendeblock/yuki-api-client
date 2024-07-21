<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPeriodDateTableResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationPeriod
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationPeriod $GetPeriodDateTableResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationPeriod
     */
    public function getGetPeriodDateTableResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationPeriod
    {
        return $this->GetPeriodDateTableResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationPeriod $GetPeriodDateTableResult
     * @return static
     */
    public function withGetPeriodDateTableResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationPeriod $GetPeriodDateTableResult) : static
    {
        $new = clone $this;
        $new->GetPeriodDateTableResult = $GetPeriodDateTableResult;

        return $new;
    }
}


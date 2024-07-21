<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdministrationsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResult $AdministrationsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResult
     */
    public function getAdministrationsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResult
    {
        return $this->AdministrationsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResult $AdministrationsResult
     * @return static
     */
    public function withAdministrationsResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\AdministrationsResult $AdministrationsResult) : static
    {
        $new = clone $this;
        $new->AdministrationsResult = $AdministrationsResult;

        return $new;
    }
}


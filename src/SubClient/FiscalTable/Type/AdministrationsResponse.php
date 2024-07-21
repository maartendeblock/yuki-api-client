<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdministrationsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\AdministrationsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\AdministrationsResult $AdministrationsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\AdministrationsResult
     */
    public function getAdministrationsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\AdministrationsResult
    {
        return $this->AdministrationsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\AdministrationsResult $AdministrationsResult
     * @return static
     */
    public function withAdministrationsResult(?\MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type\AdministrationsResult $AdministrationsResult) : static
    {
        $new = clone $this;
        $new->AdministrationsResult = $AdministrationsResult;

        return $new;
    }
}


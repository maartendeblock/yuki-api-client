<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Domains\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdministrationsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResult $AdministrationsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResult
     */
    public function getAdministrationsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResult
    {
        return $this->AdministrationsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResult $AdministrationsResult
     * @return static
     */
    public function withAdministrationsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Domains\Type\AdministrationsResult $AdministrationsResult) : static
    {
        $new = clone $this;
        $new->AdministrationsResult = $AdministrationsResult;

        return $new;
    }
}


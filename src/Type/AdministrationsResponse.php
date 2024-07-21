<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdministrationsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\AdministrationsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\AdministrationsResult $AdministrationsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\AdministrationsResult
     */
    public function getAdministrationsResult() : ?\MaartenDeBlock\YukiApiClient\Type\AdministrationsResult
    {
        return $this->AdministrationsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\AdministrationsResult $AdministrationsResult
     * @return static
     */
    public function withAdministrationsResult(?\MaartenDeBlock\YukiApiClient\Type\AdministrationsResult $AdministrationsResult) : static
    {
        $new = clone $this;
        $new->AdministrationsResult = $AdministrationsResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Integration\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAdministrationDataResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationDataForIntegration
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationDataForIntegration $GetAdministrationDataResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationDataForIntegration
     */
    public function getGetAdministrationDataResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationDataForIntegration
    {
        return $this->GetAdministrationDataResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationDataForIntegration $GetAdministrationDataResult
     * @return static
     */
    public function withGetAdministrationDataResult(?\MaartenDeBlock\YukiApiClient\SubClient\Integration\Type\AdministrationDataForIntegration $GetAdministrationDataResult) : static
    {
        $new = clone $this;
        $new->GetAdministrationDataResult = $GetAdministrationDataResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdministrationsWithInternalCustomerCodeResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\AdministrationsWithInternalCustomerCodeResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\AdministrationsWithInternalCustomerCodeResult $AdministrationsWithInternalCustomerCodeResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\AdministrationsWithInternalCustomerCodeResult
     */
    public function getAdministrationsWithInternalCustomerCodeResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\AdministrationsWithInternalCustomerCodeResult
    {
        return $this->AdministrationsWithInternalCustomerCodeResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\AdministrationsWithInternalCustomerCodeResult $AdministrationsWithInternalCustomerCodeResult
     * @return static
     */
    public function withAdministrationsWithInternalCustomerCodeResult(?\MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type\AdministrationsWithInternalCustomerCodeResult $AdministrationsWithInternalCustomerCodeResult) : static
    {
        $new = clone $this;
        $new->AdministrationsWithInternalCustomerCodeResult = $AdministrationsWithInternalCustomerCodeResult;

        return $new;
    }
}


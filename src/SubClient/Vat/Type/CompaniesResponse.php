<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CompaniesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResult $CompaniesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResult
     */
    public function getCompaniesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResult
    {
        return $this->CompaniesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResult $CompaniesResult
     * @return static
     */
    public function withCompaniesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Vat\Type\CompaniesResult $CompaniesResult) : static
    {
        $new = clone $this;
        $new->CompaniesResult = $CompaniesResult;

        return $new;
    }
}


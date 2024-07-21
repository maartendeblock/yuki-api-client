<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CompaniesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\CompaniesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\CompaniesResult $CompaniesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\CompaniesResult
     */
    public function getCompaniesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\CompaniesResult
    {
        return $this->CompaniesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\CompaniesResult $CompaniesResult
     * @return static
     */
    public function withCompaniesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\CompaniesResult $CompaniesResult) : static
    {
        $new = clone $this;
        $new->CompaniesResult = $CompaniesResult;

        return $new;
    }
}


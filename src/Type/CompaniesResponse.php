<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CompaniesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\CompaniesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\CompaniesResult $CompaniesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\CompaniesResult
     */
    public function getCompaniesResult() : ?\MaartenDeBlock\YukiApiClient\Type\CompaniesResult
    {
        return $this->CompaniesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\CompaniesResult $CompaniesResult
     * @return static
     */
    public function withCompaniesResult(?\MaartenDeBlock\YukiApiClient\Type\CompaniesResult $CompaniesResult) : static
    {
        $new = clone $this;
        $new->CompaniesResult = $CompaniesResult;

        return $new;
    }
}


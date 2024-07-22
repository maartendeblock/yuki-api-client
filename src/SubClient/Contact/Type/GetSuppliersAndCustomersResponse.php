<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Contact\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSuppliersAndCustomersResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\GetSuppliersAndCustomersResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\GetSuppliersAndCustomersResult $GetSuppliersAndCustomersResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\GetSuppliersAndCustomersResult
     */
    public function getGetSuppliersAndCustomersResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\GetSuppliersAndCustomersResult
    {
        return $this->GetSuppliersAndCustomersResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\GetSuppliersAndCustomersResult $GetSuppliersAndCustomersResult
     * @return static
     */
    public function withGetSuppliersAndCustomersResult(?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\GetSuppliersAndCustomersResult $GetSuppliersAndCustomersResult) : static
    {
        $new = clone $this;
        $new->GetSuppliersAndCustomersResult = $GetSuppliersAndCustomersResult;

        return $new;
    }
}


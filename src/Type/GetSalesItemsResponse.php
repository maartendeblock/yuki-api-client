<?php

namespace MaartenDeBlock\YukiApiClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSalesItemsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\Type\ArrayOfSalesItem
     */
    private ?\MaartenDeBlock\YukiApiClient\Type\ArrayOfSalesItem $GetSalesItemsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\Type\ArrayOfSalesItem
     */
    public function getGetSalesItemsResult() : ?\MaartenDeBlock\YukiApiClient\Type\ArrayOfSalesItem
    {
        return $this->GetSalesItemsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\Type\ArrayOfSalesItem $GetSalesItemsResult
     * @return static
     */
    public function withGetSalesItemsResult(?\MaartenDeBlock\YukiApiClient\Type\ArrayOfSalesItem $GetSalesItemsResult) : static
    {
        $new = clone $this;
        $new->GetSalesItemsResult = $GetSalesItemsResult;

        return $new;
    }
}


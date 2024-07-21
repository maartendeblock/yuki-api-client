<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSalesItemsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ArrayOfSalesItem
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ArrayOfSalesItem $GetSalesItemsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ArrayOfSalesItem
     */
    public function getGetSalesItemsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ArrayOfSalesItem
    {
        return $this->GetSalesItemsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ArrayOfSalesItem $GetSalesItemsResult
     * @return static
     */
    public function withGetSalesItemsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\ArrayOfSalesItem $GetSalesItemsResult) : static
    {
        $new = clone $this;
        $new->GetSalesItemsResult = $GetSalesItemsResult;

        return $new;
    }
}


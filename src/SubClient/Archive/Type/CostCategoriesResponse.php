<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CostCategoriesResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResult $CostCategoriesResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResult
     */
    public function getCostCategoriesResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResult
    {
        return $this->CostCategoriesResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResult $CostCategoriesResult
     * @return static
     */
    public function withCostCategoriesResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\CostCategoriesResult $CostCategoriesResult) : static
    {
        $new = clone $this;
        $new->CostCategoriesResult = $CostCategoriesResult;

        return $new;
    }
}


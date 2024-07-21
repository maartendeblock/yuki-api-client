<?php

namespace MaartenDeBlock\YukiApiClient\Type;

class ArrayOfSalesItem
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\Type\SalesItem>
     */
    private ?array $SalesItem = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\Type\SalesItem>
     */
    public function getSalesItem() : ?array
    {
        return $this->SalesItem;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\Type\SalesItem> $SalesItem
     * @return static
     */
    public function withSalesItem(?array $SalesItem) : static
    {
        $new = clone $this;
        $new->SalesItem = $SalesItem;

        return $new;
    }
}


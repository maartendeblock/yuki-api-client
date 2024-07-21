<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type;

use Phpro\SoapClient\Type\ResultInterface;

class PurchaseInvoiceSchemaPathResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $PurchaseInvoiceSchemaPathResult = null;

    /**
     * @return null | string
     */
    public function getPurchaseInvoiceSchemaPathResult() : ?string
    {
        return $this->PurchaseInvoiceSchemaPathResult;
    }

    /**
     * @param null | string $PurchaseInvoiceSchemaPathResult
     * @return static
     */
    public function withPurchaseInvoiceSchemaPathResult(?string $PurchaseInvoiceSchemaPathResult) : static
    {
        $new = clone $this;
        $new->PurchaseInvoiceSchemaPathResult = $PurchaseInvoiceSchemaPathResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SalesInvoiceSchemaPathResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $SalesInvoiceSchemaPathResult = null;

    /**
     * @return null | string
     */
    public function getSalesInvoiceSchemaPathResult() : ?string
    {
        return $this->SalesInvoiceSchemaPathResult;
    }

    /**
     * @param null | string $SalesInvoiceSchemaPathResult
     * @return static
     */
    public function withSalesInvoiceSchemaPathResult(?string $SalesInvoiceSchemaPathResult) : static
    {
        $new = clone $this;
        $new->SalesInvoiceSchemaPathResult = $SalesInvoiceSchemaPathResult;

        return $new;
    }
}


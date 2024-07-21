<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class PaymentMethod
{
    /**
     * @var int
     */
    private int $ID;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @return int
     */
    public function getID() : int
    {
        return $this->ID;
    }

    /**
     * @param int $ID
     * @return static
     */
    public function withID(int $ID) : static
    {
        $new = clone $this;
        $new->ID = $ID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }
}


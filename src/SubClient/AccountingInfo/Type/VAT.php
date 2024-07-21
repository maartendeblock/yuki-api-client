<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class VAT
{
    /**
     * @var null | int
     */
    private ?int $codeType = null;

    /**
     * @var null | string
     */
    private ?string $codeDescription = null;

    /**
     * @var null | float
     */
    private ?float $codePercentage = null;

    /**
     * @return null | int
     */
    public function getCodeType() : ?int
    {
        return $this->codeType;
    }

    /**
     * @param null | int $codeType
     * @return static
     */
    public function withCodeType(?int $codeType) : static
    {
        $new = clone $this;
        $new->codeType = $codeType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCodeDescription() : ?string
    {
        return $this->codeDescription;
    }

    /**
     * @param null | string $codeDescription
     * @return static
     */
    public function withCodeDescription(?string $codeDescription) : static
    {
        $new = clone $this;
        $new->codeDescription = $codeDescription;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getCodePercentage() : ?float
    {
        return $this->codePercentage;
    }

    /**
     * @param null | float $codePercentage
     * @return static
     */
    public function withCodePercentage(?float $codePercentage) : static
    {
        $new = clone $this;
        $new->codePercentage = $codePercentage;

        return $new;
    }
}


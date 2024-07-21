<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ProjectInfo
{
    /**
     * @var null | string
     */
    private ?string $code = null;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @return null | string
     */
    public function getCode() : ?string
    {
        return $this->code;
    }

    /**
     * @param null | string $code
     * @return static
     */
    public function withCode(?string $code) : static
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param null | string $description
     * @return static
     */
    public function withDescription(?string $description) : static
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}


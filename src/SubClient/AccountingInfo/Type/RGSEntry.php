<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class RGSEntry
{
    /**
     * @var null | string
     */
    private ?string $YukiCode = null;

    /**
     * @var null | string
     */
    private ?string $YukiIsEnabled = null;

    /**
     * @var null | string
     */
    private ?string $YukiDescription = null;

    /**
     * @var null | string
     */
    private ?string $RgsReferenceCode = null;

    /**
     * @var null | string
     */
    private ?string $RgsDescription = null;

    /**
     * @var null | string
     */
    private ?string $RgsFlipCode = null;

    /**
     * @return null | string
     */
    public function getYukiCode() : ?string
    {
        return $this->YukiCode;
    }

    /**
     * @param null | string $YukiCode
     * @return static
     */
    public function withYukiCode(?string $YukiCode) : static
    {
        $new = clone $this;
        $new->YukiCode = $YukiCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getYukiIsEnabled() : ?string
    {
        return $this->YukiIsEnabled;
    }

    /**
     * @param null | string $YukiIsEnabled
     * @return static
     */
    public function withYukiIsEnabled(?string $YukiIsEnabled) : static
    {
        $new = clone $this;
        $new->YukiIsEnabled = $YukiIsEnabled;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getYukiDescription() : ?string
    {
        return $this->YukiDescription;
    }

    /**
     * @param null | string $YukiDescription
     * @return static
     */
    public function withYukiDescription(?string $YukiDescription) : static
    {
        $new = clone $this;
        $new->YukiDescription = $YukiDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRgsReferenceCode() : ?string
    {
        return $this->RgsReferenceCode;
    }

    /**
     * @param null | string $RgsReferenceCode
     * @return static
     */
    public function withRgsReferenceCode(?string $RgsReferenceCode) : static
    {
        $new = clone $this;
        $new->RgsReferenceCode = $RgsReferenceCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRgsDescription() : ?string
    {
        return $this->RgsDescription;
    }

    /**
     * @param null | string $RgsDescription
     * @return static
     */
    public function withRgsDescription(?string $RgsDescription) : static
    {
        $new = clone $this;
        $new->RgsDescription = $RgsDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRgsFlipCode() : ?string
    {
        return $this->RgsFlipCode;
    }

    /**
     * @param null | string $RgsFlipCode
     * @return static
     */
    public function withRgsFlipCode(?string $RgsFlipCode) : static
    {
        $new = clone $this;
        $new->RgsFlipCode = $RgsFlipCode;

        return $new;
    }
}


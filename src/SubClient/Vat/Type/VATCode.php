<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

class VATCode
{
    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var int
     */
    private int $type;

    /**
     * @var null | string
     */
    private ?string $typeDescription = null;

    /**
     * @var float
     */
    private float $percentage;

    /**
     * @var null | string
     */
    private ?string $country = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $endDate = null;

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

    /**
     * @return int
     */
    public function getType() : int
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return static
     */
    public function withType(int $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTypeDescription() : ?string
    {
        return $this->typeDescription;
    }

    /**
     * @param null | string $typeDescription
     * @return static
     */
    public function withTypeDescription(?string $typeDescription) : static
    {
        $new = clone $this;
        $new->typeDescription = $typeDescription;

        return $new;
    }

    /**
     * @return float
     */
    public function getPercentage() : float
    {
        return $this->percentage;
    }

    /**
     * @param float $percentage
     * @return static
     */
    public function withPercentage(float $percentage) : static
    {
        $new = clone $this;
        $new->percentage = $percentage;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }

    /**
     * @param null | string $country
     * @return static
     */
    public function withCountry(?string $country) : static
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStartDate() : ?\DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param null | \DateTimeInterface $startDate
     * @return static
     */
    public function withStartDate(?\DateTimeInterface $startDate) : static
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEndDate() : ?\DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param null | \DateTimeInterface $endDate
     * @return static
     */
    public function withEndDate(?\DateTimeInterface $endDate) : static
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }
}


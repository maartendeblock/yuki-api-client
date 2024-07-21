<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class AdministrationPeriod
{
    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $period;

    /**
     * @var null | string
     */
    private ?string $wholePeriod = null;

    /**
     * @var bool
     */
    private bool $ISO8601Period;

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPeriod() : \DateTimeInterface
    {
        return $this->period;
    }

    /**
     * @param \DateTimeInterface $period
     * @return static
     */
    public function withPeriod(\DateTimeInterface $period) : static
    {
        $new = clone $this;
        $new->period = $period;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWholePeriod() : ?string
    {
        return $this->wholePeriod;
    }

    /**
     * @param null | string $wholePeriod
     * @return static
     */
    public function withWholePeriod(?string $wholePeriod) : static
    {
        $new = clone $this;
        $new->wholePeriod = $wholePeriod;

        return $new;
    }

    /**
     * @return bool
     */
    public function getISO8601Period() : bool
    {
        return $this->ISO8601Period;
    }

    /**
     * @param bool $ISO8601Period
     * @return static
     */
    public function withISO8601Period(bool $ISO8601Period) : static
    {
        $new = clone $this;
        $new->ISO8601Period = $ISO8601Period;

        return $new;
    }
}


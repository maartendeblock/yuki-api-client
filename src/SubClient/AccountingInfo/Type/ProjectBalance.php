<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ProjectBalance
{
    /**
     * @var null | string
     */
    private ?string $glAccountCode = null;

    /**
     * @var null | string
     */
    private ?string $project = null;

    /**
     * @var null | string
     */
    private ?string $projectCode = null;

    /**
     * @var float
     */
    private float $amount;

    /**
     * @return null | string
     */
    public function getGlAccountCode() : ?string
    {
        return $this->glAccountCode;
    }

    /**
     * @param null | string $glAccountCode
     * @return static
     */
    public function withGlAccountCode(?string $glAccountCode) : static
    {
        $new = clone $this;
        $new->glAccountCode = $glAccountCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProject() : ?string
    {
        return $this->project;
    }

    /**
     * @param null | string $project
     * @return static
     */
    public function withProject(?string $project) : static
    {
        $new = clone $this;
        $new->project = $project;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProjectCode() : ?string
    {
        return $this->projectCode;
    }

    /**
     * @param null | string $projectCode
     * @return static
     */
    public function withProjectCode(?string $projectCode) : static
    {
        $new = clone $this;
        $new->projectCode = $projectCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return static
     */
    public function withAmount(float $amount) : static
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }
}


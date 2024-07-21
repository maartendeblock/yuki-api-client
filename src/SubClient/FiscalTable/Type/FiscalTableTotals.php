<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type;

class FiscalTableTotals
{
    /**
     * @var null | string
     */
    private ?string $RevenueTotal = null;

    /**
     * @var null | string
     */
    private ?string $GrossMarginTotal = null;

    /**
     * @var null | string
     */
    private ?string $ProfessionalCostsTotal = null;

    /**
     * @var null | string
     */
    private ?string $SocialContributionsTotal = null;

    /**
     * @return null | string
     */
    public function getRevenueTotal() : ?string
    {
        return $this->RevenueTotal;
    }

    /**
     * @param null | string $RevenueTotal
     * @return static
     */
    public function withRevenueTotal(?string $RevenueTotal) : static
    {
        $new = clone $this;
        $new->RevenueTotal = $RevenueTotal;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getGrossMarginTotal() : ?string
    {
        return $this->GrossMarginTotal;
    }

    /**
     * @param null | string $GrossMarginTotal
     * @return static
     */
    public function withGrossMarginTotal(?string $GrossMarginTotal) : static
    {
        $new = clone $this;
        $new->GrossMarginTotal = $GrossMarginTotal;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProfessionalCostsTotal() : ?string
    {
        return $this->ProfessionalCostsTotal;
    }

    /**
     * @param null | string $ProfessionalCostsTotal
     * @return static
     */
    public function withProfessionalCostsTotal(?string $ProfessionalCostsTotal) : static
    {
        $new = clone $this;
        $new->ProfessionalCostsTotal = $ProfessionalCostsTotal;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSocialContributionsTotal() : ?string
    {
        return $this->SocialContributionsTotal;
    }

    /**
     * @param null | string $SocialContributionsTotal
     * @return static
     */
    public function withSocialContributionsTotal(?string $SocialContributionsTotal) : static
    {
        $new = clone $this;
        $new->SocialContributionsTotal = $SocialContributionsTotal;

        return $new;
    }
}


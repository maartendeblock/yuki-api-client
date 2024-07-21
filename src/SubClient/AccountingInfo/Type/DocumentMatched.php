<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class DocumentMatched
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $matchDate = null;

    /**
     * @var null | string
     */
    private ?string $matchedBy = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getMatchDate() : ?\DateTimeInterface
    {
        return $this->matchDate;
    }

    /**
     * @param null | \DateTimeInterface $matchDate
     * @return static
     */
    public function withMatchDate(?\DateTimeInterface $matchDate) : static
    {
        $new = clone $this;
        $new->matchDate = $matchDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMatchedBy() : ?string
    {
        return $this->matchedBy;
    }

    /**
     * @param null | string $matchedBy
     * @return static
     */
    public function withMatchedBy(?string $matchedBy) : static
    {
        $new = clone $this;
        $new->matchedBy = $matchedBy;

        return $new;
    }
}


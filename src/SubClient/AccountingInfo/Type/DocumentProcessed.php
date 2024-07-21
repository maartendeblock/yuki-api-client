<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class DocumentProcessed
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $processedDate = null;

    /**
     * @var null | string
     */
    private ?string $processedBy = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getProcessedDate() : ?\DateTimeInterface
    {
        return $this->processedDate;
    }

    /**
     * @param null | \DateTimeInterface $processedDate
     * @return static
     */
    public function withProcessedDate(?\DateTimeInterface $processedDate) : static
    {
        $new = clone $this;
        $new->processedDate = $processedDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProcessedBy() : ?string
    {
        return $this->processedBy;
    }

    /**
     * @param null | string $processedBy
     * @return static
     */
    public function withProcessedBy(?string $processedBy) : static
    {
        $new = clone $this;
        $new->processedBy = $processedBy;

        return $new;
    }
}


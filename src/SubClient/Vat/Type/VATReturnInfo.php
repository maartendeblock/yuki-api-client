<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

class VATReturnInfo
{
    /**
     * @var null | string
     */
    private ?string $documentID = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $startDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $endDate;

    /**
     * @var null | string
     */
    private ?string $status = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $sendDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $acknowledgeDate = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $modified;

    /**
     * @return null | string
     */
    public function getDocumentID() : ?string
    {
        return $this->documentID;
    }

    /**
     * @param null | string $documentID
     * @return static
     */
    public function withDocumentID(?string $documentID) : static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate() : \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * @param \DateTimeInterface $startDate
     * @return static
     */
    public function withStartDate(\DateTimeInterface $startDate) : static
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate() : \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * @param \DateTimeInterface $endDate
     * @return static
     */
    public function withEndDate(\DateTimeInterface $endDate) : static
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }

    /**
     * @param null | string $status
     * @return static
     */
    public function withStatus(?string $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getSendDate() : ?\DateTimeInterface
    {
        return $this->sendDate;
    }

    /**
     * @param null | \DateTimeInterface $sendDate
     * @return static
     */
    public function withSendDate(?\DateTimeInterface $sendDate) : static
    {
        $new = clone $this;
        $new->sendDate = $sendDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getAcknowledgeDate() : ?\DateTimeInterface
    {
        return $this->acknowledgeDate;
    }

    /**
     * @param null | \DateTimeInterface $acknowledgeDate
     * @return static
     */
    public function withAcknowledgeDate(?\DateTimeInterface $acknowledgeDate) : static
    {
        $new = clone $this;
        $new->acknowledgeDate = $acknowledgeDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getModified() : \DateTimeInterface
    {
        return $this->modified;
    }

    /**
     * @param \DateTimeInterface $modified
     * @return static
     */
    public function withModified(\DateTimeInterface $modified) : static
    {
        $new = clone $this;
        $new->modified = $modified;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ModifiedDocumentsByType implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var int
     */
    private int $documentType;

    /**
     * @var 'CreatedDesc' | 'CreatedAsc' | 'ModifiedDesc' | 'ModifiedAsc' | 'DocumentDateDesc' | 'DocumentDateAsc' | 'ContactNameAsc' | 'ContactNameDesc'
     */
    private string $sortOrder;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $modifiedSince;

    /**
     * @var int
     */
    private int $numberOfRecords;

    /**
     * @var int
     */
    private int $startRecord;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param int $documentType
     * @param 'CreatedDesc' | 'CreatedAsc' | 'ModifiedDesc' | 'ModifiedAsc' | 'DocumentDateDesc' | 'DocumentDateAsc' | 'ContactNameAsc' | 'ContactNameDesc' $sortOrder
     * @param \DateTimeInterface $modifiedSince
     * @param int $numberOfRecords
     * @param int $startRecord
     */
    public function __construct(?string $sessionID, int $documentType, string $sortOrder, \DateTimeInterface $modifiedSince, int $numberOfRecords, int $startRecord)
    {
        $this->sessionID = $sessionID;
        $this->documentType = $documentType;
        $this->sortOrder = $sortOrder;
        $this->modifiedSince = $modifiedSince;
        $this->numberOfRecords = $numberOfRecords;
        $this->startRecord = $startRecord;
    }

    /**
     * @return null | string
     */
    public function getSessionID() : ?string
    {
        return $this->sessionID;
    }

    /**
     * @param null | string $sessionID
     * @return static
     */
    public function withSessionID(?string $sessionID) : static
    {
        $new = clone $this;
        $new->sessionID = $sessionID;

        return $new;
    }

    /**
     * @return int
     */
    public function getDocumentType() : int
    {
        return $this->documentType;
    }

    /**
     * @param int $documentType
     * @return static
     */
    public function withDocumentType(int $documentType) : static
    {
        $new = clone $this;
        $new->documentType = $documentType;

        return $new;
    }

    /**
     * @return 'CreatedDesc' | 'CreatedAsc' | 'ModifiedDesc' | 'ModifiedAsc' | 'DocumentDateDesc' | 'DocumentDateAsc' | 'ContactNameAsc' | 'ContactNameDesc'
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder;
    }

    /**
     * @param 'CreatedDesc' | 'CreatedAsc' | 'ModifiedDesc' | 'ModifiedAsc' | 'DocumentDateDesc' | 'DocumentDateAsc' | 'ContactNameAsc' | 'ContactNameDesc' $sortOrder
     * @return static
     */
    public function withSortOrder(string $sortOrder) : static
    {
        $new = clone $this;
        $new->sortOrder = $sortOrder;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getModifiedSince() : \DateTimeInterface
    {
        return $this->modifiedSince;
    }

    /**
     * @param \DateTimeInterface $modifiedSince
     * @return static
     */
    public function withModifiedSince(\DateTimeInterface $modifiedSince) : static
    {
        $new = clone $this;
        $new->modifiedSince = $modifiedSince;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfRecords() : int
    {
        return $this->numberOfRecords;
    }

    /**
     * @param int $numberOfRecords
     * @return static
     */
    public function withNumberOfRecords(int $numberOfRecords) : static
    {
        $new = clone $this;
        $new->numberOfRecords = $numberOfRecords;

        return $new;
    }

    /**
     * @return int
     */
    public function getStartRecord() : int
    {
        return $this->startRecord;
    }

    /**
     * @param int $startRecord
     * @return static
     */
    public function withStartRecord(int $startRecord) : static
    {
        $new = clone $this;
        $new->startRecord = $startRecord;

        return $new;
    }
}


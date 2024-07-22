<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchDocuments implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var 'All' | 'Creator' | 'Contact' | 'Subject' | 'Tag' | 'Type'
     */
    private string $searchOption;

    /**
     * @var null | string
     */
    private ?string $searchText = null;

    /**
     * @var int
     */
    private int $folderID;

    /**
     * @var int
     */
    private int $tabID;

    /**
     * @var 'CreatedDesc' | 'CreatedAsc' | 'ModifiedDesc' | 'ModifiedAsc' | 'DocumentDateDesc' | 'DocumentDateAsc' | 'ContactNameAsc' | 'ContactNameDesc'
     */
    private string $sortOrder;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $startDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $endDate;

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
     * @param 'All' | 'Creator' | 'Contact' | 'Subject' | 'Tag' | 'Type' $searchOption
     * @param null | string $searchText
     * @param int $folderID
     * @param int $tabID
     * @param 'CreatedDesc' | 'CreatedAsc' | 'ModifiedDesc' | 'ModifiedAsc' | 'DocumentDateDesc' | 'DocumentDateAsc' | 'ContactNameAsc' | 'ContactNameDesc' $sortOrder
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param int $numberOfRecords
     * @param int $startRecord
     */
    public function __construct(?string $sessionID, string $searchOption, ?string $searchText, int $folderID, int $tabID, string $sortOrder, \DateTimeInterface $startDate, \DateTimeInterface $endDate, int $numberOfRecords, int $startRecord)
    {
        $this->sessionID = $sessionID;
        $this->searchOption = $searchOption;
        $this->searchText = $searchText;
        $this->folderID = $folderID;
        $this->tabID = $tabID;
        $this->sortOrder = $sortOrder;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
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
     * @return 'All' | 'Creator' | 'Contact' | 'Subject' | 'Tag' | 'Type'
     */
    public function getSearchOption() : string
    {
        return $this->searchOption;
    }

    /**
     * @param 'All' | 'Creator' | 'Contact' | 'Subject' | 'Tag' | 'Type' $searchOption
     * @return static
     */
    public function withSearchOption(string $searchOption) : static
    {
        $new = clone $this;
        $new->searchOption = $searchOption;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSearchText() : ?string
    {
        return $this->searchText;
    }

    /**
     * @param null | string $searchText
     * @return static
     */
    public function withSearchText(?string $searchText) : static
    {
        $new = clone $this;
        $new->searchText = $searchText;

        return $new;
    }

    /**
     * @return int
     */
    public function getFolderID() : int
    {
        return $this->folderID;
    }

    /**
     * @param int $folderID
     * @return static
     */
    public function withFolderID(int $folderID) : static
    {
        $new = clone $this;
        $new->folderID = $folderID;

        return $new;
    }

    /**
     * @return int
     */
    public function getTabID() : int
    {
        return $this->tabID;
    }

    /**
     * @param int $tabID
     * @return static
     */
    public function withTabID(int $tabID) : static
    {
        $new = clone $this;
        $new->tabID = $tabID;

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


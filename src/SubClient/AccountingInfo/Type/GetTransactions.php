<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTransactions implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $administrationID = null;

    /**
     * @var null | string
     */
    private ?string $glAccountCode = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $startDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $endDate;

    /**
     * @var null | int
     */
    private ?int $financialMode = null;

    /**
     * @var null | string
     */
    private ?string $dataGroups = null;

    /**
     * @var null | int
     */
    private ?int $numberOfRecords = null;

    /**
     * @var null | int
     */
    private ?int $startRecord = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch $searchValues = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param null | string $glAccountCode
     * @param \DateTimeInterface $startDate
     * @param \DateTimeInterface $endDate
     * @param null | int $financialMode
     * @param null | string $dataGroups
     * @param null | int $numberOfRecords
     * @param null | int $startRecord
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch $searchValues
     */
    public function __construct(?string $sessionID, ?string $administrationID, ?string $glAccountCode, \DateTimeInterface $startDate, \DateTimeInterface $endDate, ?int $financialMode, ?string $dataGroups, ?int $numberOfRecords, ?int $startRecord, ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch $searchValues)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->glAccountCode = $glAccountCode;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->financialMode = $financialMode;
        $this->dataGroups = $dataGroups;
        $this->numberOfRecords = $numberOfRecords;
        $this->startRecord = $startRecord;
        $this->searchValues = $searchValues;
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
     * @return null | string
     */
    public function getAdministrationID() : ?string
    {
        return $this->administrationID;
    }

    /**
     * @param null | string $administrationID
     * @return static
     */
    public function withAdministrationID(?string $administrationID) : static
    {
        $new = clone $this;
        $new->administrationID = $administrationID;

        return $new;
    }

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
     * @return null | int
     */
    public function getFinancialMode() : ?int
    {
        return $this->financialMode;
    }

    /**
     * @param null | int $financialMode
     * @return static
     */
    public function withFinancialMode(?int $financialMode) : static
    {
        $new = clone $this;
        $new->financialMode = $financialMode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDataGroups() : ?string
    {
        return $this->dataGroups;
    }

    /**
     * @param null | string $dataGroups
     * @return static
     */
    public function withDataGroups(?string $dataGroups) : static
    {
        $new = clone $this;
        $new->dataGroups = $dataGroups;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNumberOfRecords() : ?int
    {
        return $this->numberOfRecords;
    }

    /**
     * @param null | int $numberOfRecords
     * @return static
     */
    public function withNumberOfRecords(?int $numberOfRecords) : static
    {
        $new = clone $this;
        $new->numberOfRecords = $numberOfRecords;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getStartRecord() : ?int
    {
        return $this->startRecord;
    }

    /**
     * @param null | int $startRecord
     * @return static
     */
    public function withStartRecord(?int $startRecord) : static
    {
        $new = clone $this;
        $new->startRecord = $startRecord;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch
     */
    public function getSearchValues() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch
    {
        return $this->searchValues;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch $searchValues
     * @return static
     */
    public function withSearchValues(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfTransactionSearch $searchValues) : static
    {
        $new = clone $this;
        $new->searchValues = $searchValues;

        return $new;
    }
}


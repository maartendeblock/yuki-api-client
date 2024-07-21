<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class TransactionInfo
{
    /**
     * @var null | string
     */
    private ?string $id = null;

    /**
     * @var null | string
     */
    private ?string $hID = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $transactionDate;

    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var float
     */
    private float $transactionAmount;

    /**
     * @var float
     */
    private float $transactionAmountForeignCurrency;

    /**
     * @var float
     */
    private float $currencyRate;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @var null | string
     */
    private ?string $taxCodeDescription = null;

    /**
     * @var null | string
     */
    private ?string $fullName = null;

    /**
     * @var null | string
     */
    private ?string $CoCNumber = null;

    /**
     * @var null | string
     */
    private ?string $VATNumber = null;

    /**
     * @var int
     */
    private int $contactHID;

    /**
     * @var null | string
     */
    private ?string $contactCode = null;

    /**
     * @var null | string
     */
    private ?string $contactCountry = null;

    /**
     * @var null | string
     */
    private ?string $contactZipcode = null;

    /**
     * @var null | string
     */
    private ?string $project = null;

    /**
     * @var null | string
     */
    private ?string $projectCode = null;

    /**
     * @var null | string
     */
    private ?string $glAccountCode = null;

    /**
     * @var null | string
     */
    private ?string $documentID = null;

    /**
     * @var null | string
     */
    private ?string $documentReference = null;

    /**
     * @var null | string
     */
    private ?string $documentType = null;

    /**
     * @var null | string
     */
    private ?string $documentFolder = null;

    /**
     * @var null | string
     */
    private ?string $documentFolderTab = null;

    /**
     * @var null | string
     */
    private ?string $contactID = null;

    /**
     * @var null | string
     */
    private ?string $periodId = null;

    /**
     * @var null | string
     */
    private ?string $company = null;

    /**
     * @var null | string
     */
    private ?string $mutationUser = null;

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param null | string $id
     * @return static
     */
    public function withId(?string $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getHID() : ?string
    {
        return $this->hID;
    }

    /**
     * @param null | string $hID
     * @return static
     */
    public function withHID(?string $hID) : static
    {
        $new = clone $this;
        $new->hID = $hID;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTransactionDate() : \DateTimeInterface
    {
        return $this->transactionDate;
    }

    /**
     * @param \DateTimeInterface $transactionDate
     * @return static
     */
    public function withTransactionDate(\DateTimeInterface $transactionDate) : static
    {
        $new = clone $this;
        $new->transactionDate = $transactionDate;

        return $new;
    }

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
     * @return float
     */
    public function getTransactionAmount() : float
    {
        return $this->transactionAmount;
    }

    /**
     * @param float $transactionAmount
     * @return static
     */
    public function withTransactionAmount(float $transactionAmount) : static
    {
        $new = clone $this;
        $new->transactionAmount = $transactionAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getTransactionAmountForeignCurrency() : float
    {
        return $this->transactionAmountForeignCurrency;
    }

    /**
     * @param float $transactionAmountForeignCurrency
     * @return static
     */
    public function withTransactionAmountForeignCurrency(float $transactionAmountForeignCurrency) : static
    {
        $new = clone $this;
        $new->transactionAmountForeignCurrency = $transactionAmountForeignCurrency;

        return $new;
    }

    /**
     * @return float
     */
    public function getCurrencyRate() : float
    {
        return $this->currencyRate;
    }

    /**
     * @param float $currencyRate
     * @return static
     */
    public function withCurrencyRate(float $currencyRate) : static
    {
        $new = clone $this;
        $new->currencyRate = $currencyRate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }

    /**
     * @param null | string $currency
     * @return static
     */
    public function withCurrency(?string $currency) : static
    {
        $new = clone $this;
        $new->currency = $currency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTaxCodeDescription() : ?string
    {
        return $this->taxCodeDescription;
    }

    /**
     * @param null | string $taxCodeDescription
     * @return static
     */
    public function withTaxCodeDescription(?string $taxCodeDescription) : static
    {
        $new = clone $this;
        $new->taxCodeDescription = $taxCodeDescription;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFullName() : ?string
    {
        return $this->fullName;
    }

    /**
     * @param null | string $fullName
     * @return static
     */
    public function withFullName(?string $fullName) : static
    {
        $new = clone $this;
        $new->fullName = $fullName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCoCNumber() : ?string
    {
        return $this->CoCNumber;
    }

    /**
     * @param null | string $CoCNumber
     * @return static
     */
    public function withCoCNumber(?string $CoCNumber) : static
    {
        $new = clone $this;
        $new->CoCNumber = $CoCNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVATNumber() : ?string
    {
        return $this->VATNumber;
    }

    /**
     * @param null | string $VATNumber
     * @return static
     */
    public function withVATNumber(?string $VATNumber) : static
    {
        $new = clone $this;
        $new->VATNumber = $VATNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getContactHID() : int
    {
        return $this->contactHID;
    }

    /**
     * @param int $contactHID
     * @return static
     */
    public function withContactHID(int $contactHID) : static
    {
        $new = clone $this;
        $new->contactHID = $contactHID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContactCode() : ?string
    {
        return $this->contactCode;
    }

    /**
     * @param null | string $contactCode
     * @return static
     */
    public function withContactCode(?string $contactCode) : static
    {
        $new = clone $this;
        $new->contactCode = $contactCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContactCountry() : ?string
    {
        return $this->contactCountry;
    }

    /**
     * @param null | string $contactCountry
     * @return static
     */
    public function withContactCountry(?string $contactCountry) : static
    {
        $new = clone $this;
        $new->contactCountry = $contactCountry;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContactZipcode() : ?string
    {
        return $this->contactZipcode;
    }

    /**
     * @param null | string $contactZipcode
     * @return static
     */
    public function withContactZipcode(?string $contactZipcode) : static
    {
        $new = clone $this;
        $new->contactZipcode = $contactZipcode;

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
     * @return null | string
     */
    public function getDocumentReference() : ?string
    {
        return $this->documentReference;
    }

    /**
     * @param null | string $documentReference
     * @return static
     */
    public function withDocumentReference(?string $documentReference) : static
    {
        $new = clone $this;
        $new->documentReference = $documentReference;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentType() : ?string
    {
        return $this->documentType;
    }

    /**
     * @param null | string $documentType
     * @return static
     */
    public function withDocumentType(?string $documentType) : static
    {
        $new = clone $this;
        $new->documentType = $documentType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentFolder() : ?string
    {
        return $this->documentFolder;
    }

    /**
     * @param null | string $documentFolder
     * @return static
     */
    public function withDocumentFolder(?string $documentFolder) : static
    {
        $new = clone $this;
        $new->documentFolder = $documentFolder;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentFolderTab() : ?string
    {
        return $this->documentFolderTab;
    }

    /**
     * @param null | string $documentFolderTab
     * @return static
     */
    public function withDocumentFolderTab(?string $documentFolderTab) : static
    {
        $new = clone $this;
        $new->documentFolderTab = $documentFolderTab;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContactID() : ?string
    {
        return $this->contactID;
    }

    /**
     * @param null | string $contactID
     * @return static
     */
    public function withContactID(?string $contactID) : static
    {
        $new = clone $this;
        $new->contactID = $contactID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPeriodId() : ?string
    {
        return $this->periodId;
    }

    /**
     * @param null | string $periodId
     * @return static
     */
    public function withPeriodId(?string $periodId) : static
    {
        $new = clone $this;
        $new->periodId = $periodId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCompany() : ?string
    {
        return $this->company;
    }

    /**
     * @param null | string $company
     * @return static
     */
    public function withCompany(?string $company) : static
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMutationUser() : ?string
    {
        return $this->mutationUser;
    }

    /**
     * @param null | string $mutationUser
     * @return static
     */
    public function withMutationUser(?string $mutationUser) : static
    {
        $new = clone $this;
        $new->mutationUser = $mutationUser;

        return $new;
    }
}


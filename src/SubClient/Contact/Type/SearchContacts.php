<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Contact\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SearchContacts implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $domainID = null;

    /**
     * @var 'All' | 'Name' | 'City' | 'Postcode' | 'Tag' | 'Email' | 'Website' | 'Phone' | 'Code' | 'CoCNumber' | 'VATNumber' | 'BankAccount' | 'ID' | 'ContactType' | 'HID'
     */
    private string $searchOption;

    /**
     * @var null | string
     */
    private ?string $searchValue = null;

    /**
     * @var 'Name' | 'LastName' | 'CreatedAsc' | 'CreatedDesc' | 'ModifiedAsc' | 'ModifiedDesc' | 'HID'
     */
    private string $sortOrder;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $modifiedAfter = null;

    /**
     * @var 'Both' | 'Active' | 'Inactive'
     */
    private string $active;

    /**
     * @var int
     */
    private int $pageNumber;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $domainID
     * @param 'All' | 'Name' | 'City' | 'Postcode' | 'Tag' | 'Email' | 'Website' | 'Phone' | 'Code' | 'CoCNumber' | 'VATNumber' | 'BankAccount' | 'ID' | 'ContactType' | 'HID' $searchOption
     * @param null | string $searchValue
     * @param 'Name' | 'LastName' | 'CreatedAsc' | 'CreatedDesc' | 'ModifiedAsc' | 'ModifiedDesc' | 'HID' $sortOrder
     * @param null | \DateTimeInterface $modifiedAfter
     * @param 'Both' | 'Active' | 'Inactive' $active
     * @param int $pageNumber
     */
    public function __construct(?string $sessionID, ?string $domainID, string $searchOption, ?string $searchValue, string $sortOrder, ?\DateTimeInterface $modifiedAfter, string $active, int $pageNumber)
    {
        $this->sessionID = $sessionID;
        $this->domainID = $domainID;
        $this->searchOption = $searchOption;
        $this->searchValue = $searchValue;
        $this->sortOrder = $sortOrder;
        $this->modifiedAfter = $modifiedAfter;
        $this->active = $active;
        $this->pageNumber = $pageNumber;
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
    public function getDomainID() : ?string
    {
        return $this->domainID;
    }

    /**
     * @param null | string $domainID
     * @return static
     */
    public function withDomainID(?string $domainID) : static
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    /**
     * @return 'All' | 'Name' | 'City' | 'Postcode' | 'Tag' | 'Email' | 'Website' | 'Phone' | 'Code' | 'CoCNumber' | 'VATNumber' | 'BankAccount' | 'ID' | 'ContactType' | 'HID'
     */
    public function getSearchOption() : string
    {
        return $this->searchOption;
    }

    /**
     * @param 'All' | 'Name' | 'City' | 'Postcode' | 'Tag' | 'Email' | 'Website' | 'Phone' | 'Code' | 'CoCNumber' | 'VATNumber' | 'BankAccount' | 'ID' | 'ContactType' | 'HID' $searchOption
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
    public function getSearchValue() : ?string
    {
        return $this->searchValue;
    }

    /**
     * @param null | string $searchValue
     * @return static
     */
    public function withSearchValue(?string $searchValue) : static
    {
        $new = clone $this;
        $new->searchValue = $searchValue;

        return $new;
    }

    /**
     * @return 'Name' | 'LastName' | 'CreatedAsc' | 'CreatedDesc' | 'ModifiedAsc' | 'ModifiedDesc' | 'HID'
     */
    public function getSortOrder() : string
    {
        return $this->sortOrder;
    }

    /**
     * @param 'Name' | 'LastName' | 'CreatedAsc' | 'CreatedDesc' | 'ModifiedAsc' | 'ModifiedDesc' | 'HID' $sortOrder
     * @return static
     */
    public function withSortOrder(string $sortOrder) : static
    {
        $new = clone $this;
        $new->sortOrder = $sortOrder;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getModifiedAfter() : ?\DateTimeInterface
    {
        return $this->modifiedAfter;
    }

    /**
     * @param null | \DateTimeInterface $modifiedAfter
     * @return static
     */
    public function withModifiedAfter(?\DateTimeInterface $modifiedAfter) : static
    {
        $new = clone $this;
        $new->modifiedAfter = $modifiedAfter;

        return $new;
    }

    /**
     * @return 'Both' | 'Active' | 'Inactive'
     */
    public function getActive() : string
    {
        return $this->active;
    }

    /**
     * @param 'Both' | 'Active' | 'Inactive' $active
     * @return static
     */
    public function withActive(string $active) : static
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }

    /**
     * @return int
     */
    public function getPageNumber() : int
    {
        return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return static
     */
    public function withPageNumber(int $pageNumber) : static
    {
        $new = clone $this;
        $new->pageNumber = $pageNumber;

        return $new;
    }
}


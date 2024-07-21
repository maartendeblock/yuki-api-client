<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class Project
{
    /**
     * @var null | string
     */
    private ?string $description = null;

    /**
     * @var int
     */
    private int $HID;

    /**
     * @var null | string
     */
    private ?string $code = null;

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
    private ?string $company = null;

    /**
     * @var null | string
     */
    private ?string $contact = null;

    /**
     * @var null | string
     */
    private ?string $tags = null;

    /**
     * @var float
     */
    private float $budgetSales;

    /**
     * @var float
     */
    private float $budgetPurchase;

    /**
     * @var null | string
     */
    private ?string $contactID = null;

    /**
     * @var null | string
     */
    private ?string $id = null;

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
     * @return int
     */
    public function getHID() : int
    {
        return $this->HID;
    }

    /**
     * @param int $HID
     * @return static
     */
    public function withHID(int $HID) : static
    {
        $new = clone $this;
        $new->HID = $HID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCode() : ?string
    {
        return $this->code;
    }

    /**
     * @param null | string $code
     * @return static
     */
    public function withCode(?string $code) : static
    {
        $new = clone $this;
        $new->code = $code;

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
    public function getContact() : ?string
    {
        return $this->contact;
    }

    /**
     * @param null | string $contact
     * @return static
     */
    public function withContact(?string $contact) : static
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTags() : ?string
    {
        return $this->tags;
    }

    /**
     * @param null | string $tags
     * @return static
     */
    public function withTags(?string $tags) : static
    {
        $new = clone $this;
        $new->tags = $tags;

        return $new;
    }

    /**
     * @return float
     */
    public function getBudgetSales() : float
    {
        return $this->budgetSales;
    }

    /**
     * @param float $budgetSales
     * @return static
     */
    public function withBudgetSales(float $budgetSales) : static
    {
        $new = clone $this;
        $new->budgetSales = $budgetSales;

        return $new;
    }

    /**
     * @return float
     */
    public function getBudgetPurchase() : float
    {
        return $this->budgetPurchase;
    }

    /**
     * @param float $budgetPurchase
     * @return static
     */
    public function withBudgetPurchase(float $budgetPurchase) : static
    {
        $new = clone $this;
        $new->budgetPurchase = $budgetPurchase;

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
}


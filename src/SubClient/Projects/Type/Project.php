<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Projects\Type;

class Project
{
    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @var null | string
     */
    private ?string $Code = null;

    /**
     * @var null | string
     */
    private ?string $Company = null;

    /**
     * @var null | string
     */
    private ?string $Manager = null;

    /**
     * @var null | string
     */
    private ?string $Contact = null;

    /**
     * @var null | string
     */
    private ?string $Notes = null;

    /**
     * @var null | int
     */
    private ?int $SecurityLevel = null;

    /**
     * @var null | bool
     */
    private ?bool $AllowOCRMatching = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $StartDate = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $EndDate = null;

    /**
     * @var null | float
     */
    private ?float $BudgetRevenue = null;

    /**
     * @var null | float
     */
    private ?float $BudgetCosts = null;

    /**
     * @return null | string
     */
    public function getDescription() : ?string
    {
        return $this->Description;
    }

    /**
     * @param null | string $Description
     * @return static
     */
    public function withDescription(?string $Description) : static
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCode() : ?string
    {
        return $this->Code;
    }

    /**
     * @param null | string $Code
     * @return static
     */
    public function withCode(?string $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCompany() : ?string
    {
        return $this->Company;
    }

    /**
     * @param null | string $Company
     * @return static
     */
    public function withCompany(?string $Company) : static
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getManager() : ?string
    {
        return $this->Manager;
    }

    /**
     * @param null | string $Manager
     * @return static
     */
    public function withManager(?string $Manager) : static
    {
        $new = clone $this;
        $new->Manager = $Manager;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContact() : ?string
    {
        return $this->Contact;
    }

    /**
     * @param null | string $Contact
     * @return static
     */
    public function withContact(?string $Contact) : static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNotes() : ?string
    {
        return $this->Notes;
    }

    /**
     * @param null | string $Notes
     * @return static
     */
    public function withNotes(?string $Notes) : static
    {
        $new = clone $this;
        $new->Notes = $Notes;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSecurityLevel() : ?int
    {
        return $this->SecurityLevel;
    }

    /**
     * @param null | int $SecurityLevel
     * @return static
     */
    public function withSecurityLevel(?int $SecurityLevel) : static
    {
        $new = clone $this;
        $new->SecurityLevel = $SecurityLevel;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAllowOCRMatching() : ?bool
    {
        return $this->AllowOCRMatching;
    }

    /**
     * @param null | bool $AllowOCRMatching
     * @return static
     */
    public function withAllowOCRMatching(?bool $AllowOCRMatching) : static
    {
        $new = clone $this;
        $new->AllowOCRMatching = $AllowOCRMatching;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStartDate() : ?\DateTimeInterface
    {
        return $this->StartDate;
    }

    /**
     * @param null | \DateTimeInterface $StartDate
     * @return static
     */
    public function withStartDate(?\DateTimeInterface $StartDate) : static
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEndDate() : ?\DateTimeInterface
    {
        return $this->EndDate;
    }

    /**
     * @param null | \DateTimeInterface $EndDate
     * @return static
     */
    public function withEndDate(?\DateTimeInterface $EndDate) : static
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getBudgetRevenue() : ?float
    {
        return $this->BudgetRevenue;
    }

    /**
     * @param null | float $BudgetRevenue
     * @return static
     */
    public function withBudgetRevenue(?float $BudgetRevenue) : static
    {
        $new = clone $this;
        $new->BudgetRevenue = $BudgetRevenue;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getBudgetCosts() : ?float
    {
        return $this->BudgetCosts;
    }

    /**
     * @param null | float $BudgetCosts
     * @return static
     */
    public function withBudgetCosts(?float $BudgetCosts) : static
    {
        $new = clone $this;
        $new->BudgetCosts = $BudgetCosts;

        return $new;
    }
}


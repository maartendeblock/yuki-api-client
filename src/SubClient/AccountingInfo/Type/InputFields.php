<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class InputFields
{
    /**
     * @var null | string
     */
    private ?string $DocumentType = null;

    /**
     * @var null | string
     */
    private ?string $ContactName = null;

    /**
     * @var int
     */
    private int $Priority;

    /**
     * @var null | string
     */
    private ?string $Amount = null;

    /**
     * @var null | string
     */
    private ?string $Currency = null;

    /**
     * @var null | string
     */
    private ?string $StartDate = null;

    /**
     * @var null | string
     */
    private ?string $EndDate = null;

    /**
     * @var null | string
     */
    private ?string $Text = null;

    /**
     * @return null | string
     */
    public function getDocumentType() : ?string
    {
        return $this->DocumentType;
    }

    /**
     * @param null | string $DocumentType
     * @return static
     */
    public function withDocumentType(?string $DocumentType) : static
    {
        $new = clone $this;
        $new->DocumentType = $DocumentType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getContactName() : ?string
    {
        return $this->ContactName;
    }

    /**
     * @param null | string $ContactName
     * @return static
     */
    public function withContactName(?string $ContactName) : static
    {
        $new = clone $this;
        $new->ContactName = $ContactName;

        return $new;
    }

    /**
     * @return int
     */
    public function getPriority() : int
    {
        return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return static
     */
    public function withPriority(int $Priority) : static
    {
        $new = clone $this;
        $new->Priority = $Priority;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAmount() : ?string
    {
        return $this->Amount;
    }

    /**
     * @param null | string $Amount
     * @return static
     */
    public function withAmount(?string $Amount) : static
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrency() : ?string
    {
        return $this->Currency;
    }

    /**
     * @param null | string $Currency
     * @return static
     */
    public function withCurrency(?string $Currency) : static
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStartDate() : ?string
    {
        return $this->StartDate;
    }

    /**
     * @param null | string $StartDate
     * @return static
     */
    public function withStartDate(?string $StartDate) : static
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEndDate() : ?string
    {
        return $this->EndDate;
    }

    /**
     * @param null | string $EndDate
     * @return static
     */
    public function withEndDate(?string $EndDate) : static
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getText() : ?string
    {
        return $this->Text;
    }

    /**
     * @param null | string $Text
     * @return static
     */
    public function withText(?string $Text) : static
    {
        $new = clone $this;
        $new->Text = $Text;

        return $new;
    }
}


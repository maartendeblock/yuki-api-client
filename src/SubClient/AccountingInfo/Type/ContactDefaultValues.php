<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ContactDefaultValues
{
    /**
     * @var null | string
     */
    private ?string $ContactId = null;

    /**
     * @var null | string
     */
    private ?string $ContactName = null;

    /**
     * @var null | string
     */
    private ?string $DefaultBankAccount = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfDefaultValue
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfDefaultValue $DefaultValues = null;

    /**
     * @return null | string
     */
    public function getContactId() : ?string
    {
        return $this->ContactId;
    }

    /**
     * @param null | string $ContactId
     * @return static
     */
    public function withContactId(?string $ContactId) : static
    {
        $new = clone $this;
        $new->ContactId = $ContactId;

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
     * @return null | string
     */
    public function getDefaultBankAccount() : ?string
    {
        return $this->DefaultBankAccount;
    }

    /**
     * @param null | string $DefaultBankAccount
     * @return static
     */
    public function withDefaultBankAccount(?string $DefaultBankAccount) : static
    {
        $new = clone $this;
        $new->DefaultBankAccount = $DefaultBankAccount;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfDefaultValue
     */
    public function getDefaultValues() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfDefaultValue
    {
        return $this->DefaultValues;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfDefaultValue $DefaultValues
     * @return static
     */
    public function withDefaultValues(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfDefaultValue $DefaultValues) : static
    {
        $new = clone $this;
        $new->DefaultValues = $DefaultValues;

        return $new;
    }
}


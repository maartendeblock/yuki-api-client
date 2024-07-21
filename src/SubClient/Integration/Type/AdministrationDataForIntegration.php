<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Integration\Type;

class AdministrationDataForIntegration
{
    /**
     * @var null | string
     */
    private ?string $CompanyName = null;

    /**
     * @var null | string
     */
    private ?string $Description = null;

    /**
     * @var null | string
     */
    private ?string $MainContactName = null;

    /**
     * @var null | string
     */
    private ?string $MainContactEmail = null;

    /**
     * @var null | string
     */
    private ?string $AddressLine_1 = null;

    /**
     * @var null | string
     */
    private ?string $AddressLine_2 = null;

    /**
     * @var null | string
     */
    private ?string $Postcode = null;

    /**
     * @var null | string
     */
    private ?string $City = null;

    /**
     * @var null | string
     */
    private ?string $Country = null;

    /**
     * @var null | string
     */
    private ?string $EmailOutgoingInvoices = null;

    /**
     * @var null | string
     */
    private ?string $PhoneWork = null;

    /**
     * @var null | string
     */
    private ?string $MobileWork = null;

    /**
     * @var null | string
     */
    private ?string $FaxWork = null;

    /**
     * @var null | mixed
     */
    private mixed $CompanyLogoB64 = null;

    /**
     * @var null | mixed
     */
    private mixed $NavigationLogoB64 = null;

    /**
     * @var null | string
     */
    private ?string $IBAN = null;

    /**
     * @var null | string
     */
    private ?string $BankAccountName = null;

    /**
     * @var null | string
     */
    private ?string $CoCNumber = null;

    /**
     * @var null | string
     */
    private ?string $VATNumber = null;

    /**
     * @return null | string
     */
    public function getCompanyName() : ?string
    {
        return $this->CompanyName;
    }

    /**
     * @param null | string $CompanyName
     * @return static
     */
    public function withCompanyName(?string $CompanyName) : static
    {
        $new = clone $this;
        $new->CompanyName = $CompanyName;

        return $new;
    }

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
    public function getMainContactName() : ?string
    {
        return $this->MainContactName;
    }

    /**
     * @param null | string $MainContactName
     * @return static
     */
    public function withMainContactName(?string $MainContactName) : static
    {
        $new = clone $this;
        $new->MainContactName = $MainContactName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMainContactEmail() : ?string
    {
        return $this->MainContactEmail;
    }

    /**
     * @param null | string $MainContactEmail
     * @return static
     */
    public function withMainContactEmail(?string $MainContactEmail) : static
    {
        $new = clone $this;
        $new->MainContactEmail = $MainContactEmail;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddressLine1() : ?string
    {
        return $this->AddressLine_1;
    }

    /**
     * @param null | string $AddressLine_1
     * @return static
     */
    public function withAddressLine1(?string $AddressLine_1) : static
    {
        $new = clone $this;
        $new->AddressLine_1 = $AddressLine_1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddressLine2() : ?string
    {
        return $this->AddressLine_2;
    }

    /**
     * @param null | string $AddressLine_2
     * @return static
     */
    public function withAddressLine2(?string $AddressLine_2) : static
    {
        $new = clone $this;
        $new->AddressLine_2 = $AddressLine_2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostcode() : ?string
    {
        return $this->Postcode;
    }

    /**
     * @param null | string $Postcode
     * @return static
     */
    public function withPostcode(?string $Postcode) : static
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCity() : ?string
    {
        return $this->City;
    }

    /**
     * @param null | string $City
     * @return static
     */
    public function withCity(?string $City) : static
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountry() : ?string
    {
        return $this->Country;
    }

    /**
     * @param null | string $Country
     * @return static
     */
    public function withCountry(?string $Country) : static
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmailOutgoingInvoices() : ?string
    {
        return $this->EmailOutgoingInvoices;
    }

    /**
     * @param null | string $EmailOutgoingInvoices
     * @return static
     */
    public function withEmailOutgoingInvoices(?string $EmailOutgoingInvoices) : static
    {
        $new = clone $this;
        $new->EmailOutgoingInvoices = $EmailOutgoingInvoices;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPhoneWork() : ?string
    {
        return $this->PhoneWork;
    }

    /**
     * @param null | string $PhoneWork
     * @return static
     */
    public function withPhoneWork(?string $PhoneWork) : static
    {
        $new = clone $this;
        $new->PhoneWork = $PhoneWork;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMobileWork() : ?string
    {
        return $this->MobileWork;
    }

    /**
     * @param null | string $MobileWork
     * @return static
     */
    public function withMobileWork(?string $MobileWork) : static
    {
        $new = clone $this;
        $new->MobileWork = $MobileWork;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFaxWork() : ?string
    {
        return $this->FaxWork;
    }

    /**
     * @param null | string $FaxWork
     * @return static
     */
    public function withFaxWork(?string $FaxWork) : static
    {
        $new = clone $this;
        $new->FaxWork = $FaxWork;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getCompanyLogoB64() : mixed
    {
        return $this->CompanyLogoB64;
    }

    /**
     * @param null | mixed $CompanyLogoB64
     * @return static
     */
    public function withCompanyLogoB64(mixed $CompanyLogoB64) : static
    {
        $new = clone $this;
        $new->CompanyLogoB64 = $CompanyLogoB64;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getNavigationLogoB64() : mixed
    {
        return $this->NavigationLogoB64;
    }

    /**
     * @param null | mixed $NavigationLogoB64
     * @return static
     */
    public function withNavigationLogoB64(mixed $NavigationLogoB64) : static
    {
        $new = clone $this;
        $new->NavigationLogoB64 = $NavigationLogoB64;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIBAN() : ?string
    {
        return $this->IBAN;
    }

    /**
     * @param null | string $IBAN
     * @return static
     */
    public function withIBAN(?string $IBAN) : static
    {
        $new = clone $this;
        $new->IBAN = $IBAN;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBankAccountName() : ?string
    {
        return $this->BankAccountName;
    }

    /**
     * @param null | string $BankAccountName
     * @return static
     */
    public function withBankAccountName(?string $BankAccountName) : static
    {
        $new = clone $this;
        $new->BankAccountName = $BankAccountName;

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
}


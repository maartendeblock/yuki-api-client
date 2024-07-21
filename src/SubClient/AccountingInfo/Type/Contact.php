<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class Contact
{
    /**
     * @var int
     */
    private int $HID;

    /**
     * @var null | string
     */
    private ?string $fullName = null;

    /**
     * @var null | string
     */
    private ?string $zipCode = null;

    /**
     * @var null | string
     */
    private ?string $country = null;

    /**
     * @var null | string
     */
    private ?string $contactCode = null;

    /**
     * @var null | string
     */
    private ?string $CoCNumber = null;

    /**
     * @var null | string
     */
    private ?string $VATNumber = null;

    /**
     * @var null | string
     */
    private ?string $id = null;

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
    public function getZipCode() : ?string
    {
        return $this->zipCode;
    }

    /**
     * @param null | string $zipCode
     * @return static
     */
    public function withZipCode(?string $zipCode) : static
    {
        $new = clone $this;
        $new->zipCode = $zipCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }

    /**
     * @param null | string $country
     * @return static
     */
    public function withCountry(?string $country) : static
    {
        $new = clone $this;
        $new->country = $country;

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


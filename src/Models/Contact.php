<?php

namespace MaartenDeBlock\YukiApiClient\Models;

/**
 * Contact model for Yuki API (Customer/Supplier)
 */
class Contact extends AbstractXmlModel
{
    public const CONTACT_TYPE_PERSON = 'Person';
    public const CONTACT_TYPE_COMPANY = 'Company';
    
    public const GENDER_MALE = 'Male';
    public const GENDER_FEMALE = 'Female';

    private ?string $contactCode = null;
    private ?string $fullName = null;
    private ?string $firstName = null;
    private ?string $middleName = null;
    private ?string $lastName = null;
    private ?string $gender = null;
    private ?string $countryCode = null;
    private ?string $city = null;
    private ?string $zipcode = null;
    private ?string $addressLine1 = null;
    private ?string $addressLine2 = null;
    private ?string $website = null;
    private ?string $cocNumber = null;
    private ?string $vatNumber = null;
    private ?string $contactType = null;
    private ?string $emailAddress = null;
    private ?string $bankAccount = null;
    private ?string $bic = null;
    private ?string $phoneHome = null;
    private ?string $mobileHome = null;

    public function __construct()
    {
        // Default contact type
        $this->contactType = self::CONTACT_TYPE_COMPANY;
    }

    public function getContactCode(): ?string
    {
        return $this->contactCode;
    }

    public function setContactCode(?string $contactCode): self
    {
        $this->contactCode = $contactCode;
        return $this;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): self
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    public function setAddressLine1(?string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    public function setAddressLine2(?string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;
        return $this;
    }

    public function getCocNumber(): ?string
    {
        return $this->cocNumber;
    }

    public function setCocNumber(?string $cocNumber): self
    {
        $this->cocNumber = $cocNumber;
        return $this;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function setVatNumber(?string $vatNumber): self
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    public function getContactType(): ?string
    {
        return $this->contactType;
    }

    public function setContactType(?string $contactType): self
    {
        $this->contactType = $contactType;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }

    public function setBankAccount(?string $bankAccount): self
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;
        return $this;
    }

    public function getPhoneHome(): ?string
    {
        return $this->phoneHome;
    }

    public function setPhoneHome(?string $phoneHome): self
    {
        $this->phoneHome = $phoneHome;
        return $this;
    }

    public function getMobileHome(): ?string
    {
        return $this->mobileHome;
    }

    public function setMobileHome(?string $mobileHome): self
    {
        $this->mobileHome = $mobileHome;
        return $this;
    }

    public function toXml(int $indent = 0): string
    {
        $xml = [];
        $xml[] = $this->indent($indent) . '<Contact>';
        
        if ($this->contactCode !== null) {
            $xml[] = $this->xmlElement('ContactCode', $this->contactCode, $indent + 1);
        }
        
        if ($this->fullName !== null) {
            $xml[] = $this->xmlElement('FullName', $this->fullName, $indent + 1);
        }
        
        if ($this->firstName !== null) {
            $xml[] = $this->xmlElement('FirstName', $this->firstName, $indent + 1);
        }
        
        if ($this->middleName !== null) {
            $xml[] = $this->xmlElement('MiddleName', $this->middleName, $indent + 1);
        }
        
        if ($this->lastName !== null) {
            $xml[] = $this->xmlElement('LastName', $this->lastName, $indent + 1);
        }
        
        if ($this->gender !== null) {
            $xml[] = $this->xmlElement('Gender', $this->gender, $indent + 1);
        }
        
        if ($this->countryCode !== null) {
            $xml[] = $this->xmlElement('CountryCode', $this->countryCode, $indent + 1);
        }
        
        if ($this->city !== null) {
            $xml[] = $this->xmlElement('City', $this->city, $indent + 1);
        }
        
        if ($this->zipcode !== null) {
            $xml[] = $this->xmlElement('Zipcode', $this->zipcode, $indent + 1);
        }
        
        if ($this->addressLine1 !== null) {
            $xml[] = $this->xmlElement('AddressLine_1', $this->addressLine1, $indent + 1);
        }
        
        if ($this->addressLine2 !== null) {
            $xml[] = $this->xmlElement('AddressLine_2', $this->addressLine2, $indent + 1);
        }
        
        if ($this->website !== null) {
            $xml[] = $this->xmlElement('Website', $this->website, $indent + 1);
        }
        
        if ($this->cocNumber !== null) {
            $xml[] = $this->xmlElement('CoCNumber', $this->cocNumber, $indent + 1);
        }
        
        if ($this->vatNumber !== null) {
            $xml[] = $this->xmlElement('VATNumber', $this->vatNumber, $indent + 1);
        }
        
        if ($this->contactType !== null) {
            $xml[] = $this->xmlElement('ContactType', $this->contactType, $indent + 1);
        }
        
        if ($this->emailAddress !== null) {
            $xml[] = $this->xmlElement('EmailAddress', $this->emailAddress, $indent + 1);
        }
        
        if ($this->bankAccount !== null) {
            $xml[] = $this->xmlElement('BankAccount', $this->bankAccount, $indent + 1);
        }
        
        if ($this->bic !== null) {
            $xml[] = $this->xmlElement('BIC', $this->bic, $indent + 1);
        }
        
        if ($this->phoneHome !== null) {
            $xml[] = $this->xmlElement('PhoneHome', $this->phoneHome, $indent + 1);
        }
        
        if ($this->mobileHome !== null) {
            $xml[] = $this->xmlElement('MobileHome', $this->mobileHome, $indent + 1);
        }
        
        $xml[] = $this->indent($indent) . '</Contact>';
        
        return implode("\n", $xml);
    }

    public function validate(): array
    {
        $errors = [];
        
        // Either contact code or full name is required
        if (($this->contactCode === null || $this->contactCode === '') && 
            ($this->fullName === null || $this->fullName === '')) {
            $errors[] = "Either ContactCode or FullName is required";
        }
        
        // Validate email if provided
        $this->validateEmail($this->emailAddress, 'EmailAddress', $errors);
        
        // Validate contact type
        if ($this->contactType !== null && 
            !in_array($this->contactType, [self::CONTACT_TYPE_PERSON, self::CONTACT_TYPE_COMPANY])) {
            $errors[] = "ContactType must be either 'Person' or 'Company'";
        }
        
        // Validate gender if provided
        if ($this->gender !== null && 
            !in_array($this->gender, [self::GENDER_MALE, self::GENDER_FEMALE])) {
            $errors[] = "Gender must be either 'Male' or 'Female'";
        }
        
        return $errors;
    }

    /**
     * Create Contact from array data
     *
     * @param array $data Contact data
     * @return self
     */
    public static function fromArray(array $data): self
    {
        $contact = new self();
        
        $contact->setContactCode($data['contactCode'] ?? $data['ContactCode'] ?? null)
                ->setFullName($data['fullName'] ?? $data['FullName'] ?? null)
                ->setFirstName($data['firstName'] ?? $data['FirstName'] ?? null)
                ->setMiddleName($data['middleName'] ?? $data['MiddleName'] ?? null)
                ->setLastName($data['lastName'] ?? $data['LastName'] ?? null)
                ->setGender($data['gender'] ?? $data['Gender'] ?? null)
                ->setCountryCode($data['countryCode'] ?? $data['CountryCode'] ?? null)
                ->setCity($data['city'] ?? $data['City'] ?? null)
                ->setZipcode($data['zipcode'] ?? $data['Zipcode'] ?? null)
                ->setAddressLine1($data['addressLine1'] ?? $data['AddressLine_1'] ?? null)
                ->setAddressLine2($data['addressLine2'] ?? $data['AddressLine_2'] ?? null)
                ->setWebsite($data['website'] ?? $data['Website'] ?? null)
                ->setCocNumber($data['cocNumber'] ?? $data['CoCNumber'] ?? null)
                ->setVatNumber($data['vatNumber'] ?? $data['VATNumber'] ?? null)
                ->setContactType($data['contactType'] ?? $data['ContactType'] ?? null)
                ->setEmailAddress($data['emailAddress'] ?? $data['EmailAddress'] ?? null)
                ->setBankAccount($data['bankAccount'] ?? $data['BankAccount'] ?? null)
                ->setBic($data['bic'] ?? $data['BIC'] ?? null)
                ->setPhoneHome($data['phoneHome'] ?? $data['PhoneHome'] ?? null)
                ->setMobileHome($data['mobileHome'] ?? $data['MobileHome'] ?? null);
        
        return $contact;
    }

    /**
     * Convert to array representation
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'contactCode' => $this->contactCode,
            'fullName' => $this->fullName,
            'firstName' => $this->firstName,
            'middleName' => $this->middleName,
            'lastName' => $this->lastName,
            'gender' => $this->gender,
            'countryCode' => $this->countryCode,
            'city' => $this->city,
            'zipcode' => $this->zipcode,
            'addressLine1' => $this->addressLine1,
            'addressLine2' => $this->addressLine2,
            'website' => $this->website,
            'cocNumber' => $this->cocNumber,
            'vatNumber' => $this->vatNumber,
            'contactType' => $this->contactType,
            'emailAddress' => $this->emailAddress,
            'bankAccount' => $this->bankAccount,
            'bic' => $this->bic,
            'phoneHome' => $this->phoneHome,
            'mobileHome' => $this->mobileHome
        ];
    }
}
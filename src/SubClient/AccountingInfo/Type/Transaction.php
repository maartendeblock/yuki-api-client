<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class Transaction
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
    private float $amount;

    /**
     * @var null | string
     */
    private ?string $glAccountCode = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Contact
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Contact $contact = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Document
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Document $document = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentProcessed
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentProcessed $documentProcessed = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentMatched
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentMatched $documentMatched = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ForeignCurrency
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ForeignCurrency $foreignCurrency = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\VAT
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\VAT $vat = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectInfo
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectInfo $project = null;

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
    public function getAmount() : float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return static
     */
    public function withAmount(float $amount) : static
    {
        $new = clone $this;
        $new->amount = $amount;

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
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Contact
     */
    public function getContact() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Contact
    {
        return $this->contact;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Contact $contact
     * @return static
     */
    public function withContact(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Contact $contact) : static
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Document
     */
    public function getDocument() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Document
    {
        return $this->document;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Document $document
     * @return static
     */
    public function withDocument(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Document $document) : static
    {
        $new = clone $this;
        $new->document = $document;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentProcessed
     */
    public function getDocumentProcessed() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentProcessed
    {
        return $this->documentProcessed;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentProcessed $documentProcessed
     * @return static
     */
    public function withDocumentProcessed(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentProcessed $documentProcessed) : static
    {
        $new = clone $this;
        $new->documentProcessed = $documentProcessed;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentMatched
     */
    public function getDocumentMatched() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentMatched
    {
        return $this->documentMatched;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentMatched $documentMatched
     * @return static
     */
    public function withDocumentMatched(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\DocumentMatched $documentMatched) : static
    {
        $new = clone $this;
        $new->documentMatched = $documentMatched;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ForeignCurrency
     */
    public function getForeignCurrency() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ForeignCurrency
    {
        return $this->foreignCurrency;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ForeignCurrency $foreignCurrency
     * @return static
     */
    public function withForeignCurrency(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ForeignCurrency $foreignCurrency) : static
    {
        $new = clone $this;
        $new->foreignCurrency = $foreignCurrency;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\VAT
     */
    public function getVat() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\VAT
    {
        return $this->vat;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\VAT $vat
     * @return static
     */
    public function withVat(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\VAT $vat) : static
    {
        $new = clone $this;
        $new->vat = $vat;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectInfo
     */
    public function getProject() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectInfo
    {
        return $this->project;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectInfo $project
     * @return static
     */
    public function withProject(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ProjectInfo $project) : static
    {
        $new = clone $this;
        $new->project = $project;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadDocumentWithData implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $fileName = null;

    /**
     * @var null | mixed
     */
    private mixed $data = null;

    /**
     * @var int
     */
    private int $folder;

    /**
     * @var null | string
     */
    private ?string $administrationID = null;

    /**
     * @var null | string
     */
    private ?string $currency = null;

    /**
     * @var float
     */
    private float $amount;

    /**
     * @var null | string
     */
    private ?string $costCategory = null;

    /**
     * @var int
     */
    private int $paymentMethod;

    /**
     * @var null | string
     */
    private ?string $project = null;

    /**
     * @var null | string
     */
    private ?string $remarks = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $fileName
     * @param null | mixed $data
     * @param int $folder
     * @param null | string $administrationID
     * @param null | string $currency
     * @param float $amount
     * @param null | string $costCategory
     * @param int $paymentMethod
     * @param null | string $project
     * @param null | string $remarks
     */
    public function __construct(?string $sessionID, ?string $fileName, mixed $data, int $folder, ?string $administrationID, ?string $currency, float $amount, ?string $costCategory, int $paymentMethod, ?string $project, ?string $remarks)
    {
        $this->sessionID = $sessionID;
        $this->fileName = $fileName;
        $this->data = $data;
        $this->folder = $folder;
        $this->administrationID = $administrationID;
        $this->currency = $currency;
        $this->amount = $amount;
        $this->costCategory = $costCategory;
        $this->paymentMethod = $paymentMethod;
        $this->project = $project;
        $this->remarks = $remarks;
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
    public function getFileName() : ?string
    {
        return $this->fileName;
    }

    /**
     * @param null | string $fileName
     * @return static
     */
    public function withFileName(?string $fileName) : static
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getData() : mixed
    {
        return $this->data;
    }

    /**
     * @param null | mixed $data
     * @return static
     */
    public function withData(mixed $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }

    /**
     * @return int
     */
    public function getFolder() : int
    {
        return $this->folder;
    }

    /**
     * @param int $folder
     * @return static
     */
    public function withFolder(int $folder) : static
    {
        $new = clone $this;
        $new->folder = $folder;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAdministrationID() : ?string
    {
        return $this->administrationID;
    }

    /**
     * @param null | string $administrationID
     * @return static
     */
    public function withAdministrationID(?string $administrationID) : static
    {
        $new = clone $this;
        $new->administrationID = $administrationID;

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
    public function getCostCategory() : ?string
    {
        return $this->costCategory;
    }

    /**
     * @param null | string $costCategory
     * @return static
     */
    public function withCostCategory(?string $costCategory) : static
    {
        $new = clone $this;
        $new->costCategory = $costCategory;

        return $new;
    }

    /**
     * @return int
     */
    public function getPaymentMethod() : int
    {
        return $this->paymentMethod;
    }

    /**
     * @param int $paymentMethod
     * @return static
     */
    public function withPaymentMethod(int $paymentMethod) : static
    {
        $new = clone $this;
        $new->paymentMethod = $paymentMethod;

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
    public function getRemarks() : ?string
    {
        return $this->remarks;
    }

    /**
     * @param null | string $remarks
     * @return static
     */
    public function withRemarks(?string $remarks) : static
    {
        $new = clone $this;
        $new->remarks = $remarks;

        return $new;
    }
}


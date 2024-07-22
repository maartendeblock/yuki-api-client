<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadDocumentWithAttachment implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $fileName1 = null;

    /**
     * @var null | mixed
     */
    private mixed $data1 = null;

    /**
     * @var null | string
     */
    private ?string $fileName2 = null;

    /**
     * @var null | mixed
     */
    private mixed $data2 = null;

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
     * @param null | string $fileName1
     * @param null | mixed $data1
     * @param null | string $fileName2
     * @param null | mixed $data2
     * @param int $folder
     * @param null | string $administrationID
     * @param null | string $currency
     * @param float $amount
     * @param null | string $costCategory
     * @param int $paymentMethod
     * @param null | string $project
     * @param null | string $remarks
     */
    public function __construct(?string $sessionID, ?string $fileName1, mixed $data1, ?string $fileName2, mixed $data2, int $folder, ?string $administrationID, ?string $currency, float $amount, ?string $costCategory, int $paymentMethod, ?string $project, ?string $remarks)
    {
        $this->sessionID = $sessionID;
        $this->fileName1 = $fileName1;
        $this->data1 = $data1;
        $this->fileName2 = $fileName2;
        $this->data2 = $data2;
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
    public function getFileName1() : ?string
    {
        return $this->fileName1;
    }

    /**
     * @param null | string $fileName1
     * @return static
     */
    public function withFileName1(?string $fileName1) : static
    {
        $new = clone $this;
        $new->fileName1 = $fileName1;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getData1() : mixed
    {
        return $this->data1;
    }

    /**
     * @param null | mixed $data1
     * @return static
     */
    public function withData1(mixed $data1) : static
    {
        $new = clone $this;
        $new->data1 = $data1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFileName2() : ?string
    {
        return $this->fileName2;
    }

    /**
     * @param null | string $fileName2
     * @return static
     */
    public function withFileName2(?string $fileName2) : static
    {
        $new = clone $this;
        $new->fileName2 = $fileName2;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getData2() : mixed
    {
        return $this->data2;
    }

    /**
     * @param null | mixed $data2
     * @return static
     */
    public function withData2(mixed $data2) : static
    {
        $new = clone $this;
        $new->data2 = $data2;

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


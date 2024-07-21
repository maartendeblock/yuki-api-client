<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProjectBalance implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $administrationID = null;

    /**
     * @var null | string
     */
    private ?string $GLAccountCode = null;

    /**
     * @var null | string
     */
    private ?string $projectCode = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $StartDate;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $EndDate;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param null | string $GLAccountCode
     * @param null | string $projectCode
     * @param \DateTimeInterface $StartDate
     * @param \DateTimeInterface $EndDate
     */
    public function __construct(?string $sessionID, ?string $administrationID, ?string $GLAccountCode, ?string $projectCode, \DateTimeInterface $StartDate, \DateTimeInterface $EndDate)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->GLAccountCode = $GLAccountCode;
        $this->projectCode = $projectCode;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
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
    public function getGLAccountCode() : ?string
    {
        return $this->GLAccountCode;
    }

    /**
     * @param null | string $GLAccountCode
     * @return static
     */
    public function withGLAccountCode(?string $GLAccountCode) : static
    {
        $new = clone $this;
        $new->GLAccountCode = $GLAccountCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getProjectCode() : ?string
    {
        return $this->projectCode;
    }

    /**
     * @param null | string $projectCode
     * @return static
     */
    public function withProjectCode(?string $projectCode) : static
    {
        $new = clone $this;
        $new->projectCode = $projectCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate() : \DateTimeInterface
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     * @return static
     */
    public function withStartDate(\DateTimeInterface $StartDate) : static
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate() : \DateTimeInterface
    {
        return $this->EndDate;
    }

    /**
     * @param \DateTimeInterface $EndDate
     * @return static
     */
    public function withEndDate(\DateTimeInterface $EndDate) : static
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }
}


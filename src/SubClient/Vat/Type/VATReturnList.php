<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Vat\Type;

use Phpro\SoapClient\Type\RequestInterface;

class VATReturnList implements RequestInterface
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
     * @var int
     */
    private int $year;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $modifiedAfter;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param int $year
     * @param \DateTimeInterface $modifiedAfter
     */
    public function __construct(?string $sessionID, ?string $administrationID, int $year, \DateTimeInterface $modifiedAfter)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->year = $year;
        $this->modifiedAfter = $modifiedAfter;
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
     * @return int
     */
    public function getYear() : int
    {
        return $this->year;
    }

    /**
     * @param int $year
     * @return static
     */
    public function withYear(int $year) : static
    {
        $new = clone $this;
        $new->year = $year;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getModifiedAfter() : \DateTimeInterface
    {
        return $this->modifiedAfter;
    }

    /**
     * @param \DateTimeInterface $modifiedAfter
     * @return static
     */
    public function withModifiedAfter(\DateTimeInterface $modifiedAfter) : static
    {
        $new = clone $this;
        $new->modifiedAfter = $modifiedAfter;

        return $new;
    }
}


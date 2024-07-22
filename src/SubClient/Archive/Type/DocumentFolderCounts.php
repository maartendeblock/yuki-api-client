<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DocumentFolderCounts implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var int
     */
    private int $year;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param int $year
     */
    public function __construct(?string $sessionID, int $year)
    {
        $this->sessionID = $sessionID;
        $this->year = $year;
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
}


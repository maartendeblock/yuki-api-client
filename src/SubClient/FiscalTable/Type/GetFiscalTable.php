<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\FiscalTable\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetFiscalTable implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionId = null;

    /**
     * @var null | string
     */
    private ?string $companyId = null;

    /**
     * @var int
     */
    private int $year;

    /**
     * Constructor
     *
     * @param null | string $sessionId
     * @param null | string $companyId
     * @param int $year
     */
    public function __construct(?string $sessionId, ?string $companyId, int $year)
    {
        $this->sessionId = $sessionId;
        $this->companyId = $companyId;
        $this->year = $year;
    }

    /**
     * @return null | string
     */
    public function getSessionId() : ?string
    {
        return $this->sessionId;
    }

    /**
     * @param null | string $sessionId
     * @return static
     */
    public function withSessionId(?string $sessionId) : static
    {
        $new = clone $this;
        $new->sessionId = $sessionId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCompanyId() : ?string
    {
        return $this->companyId;
    }

    /**
     * @param null | string $companyId
     * @return static
     */
    public function withCompanyId(?string $companyId) : static
    {
        $new = clone $this;
        $new->companyId = $companyId;

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


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Pettycash\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ImportStatement implements RequestInterface
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
    private ?string $statementText = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param null | string $statementText
     */
    public function __construct(?string $sessionID, ?string $administrationID, ?string $statementText)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->statementText = $statementText;
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
    public function getStatementText() : ?string
    {
        return $this->statementText;
    }

    /**
     * @param null | string $statementText
     * @return static
     */
    public function withStatementText(?string $statementText) : static
    {
        $new = clone $this;
        $new->statementText = $statementText;

        return $new;
    }
}


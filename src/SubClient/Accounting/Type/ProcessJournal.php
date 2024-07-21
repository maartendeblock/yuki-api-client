<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProcessJournal implements RequestInterface
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
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc $xmlDoc = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc $xmlDoc
     */
    public function __construct(?string $sessionID, ?string $administrationID, ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc $xmlDoc)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->xmlDoc = $xmlDoc;
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
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc
     */
    public function getXmlDoc() : ?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc
    {
        return $this->xmlDoc;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc $xmlDoc
     * @return static
     */
    public function withXmlDoc(?\MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type\XmlDoc $xmlDoc) : static
    {
        $new = clone $this;
        $new->xmlDoc = $xmlDoc;

        return $new;
    }
}


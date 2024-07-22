<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Contact\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateContact implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $domainID = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc $xmlDoc = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $domainID
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc $xmlDoc
     */
    public function __construct(?string $sessionID, ?string $domainID, ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc $xmlDoc)
    {
        $this->sessionID = $sessionID;
        $this->domainID = $domainID;
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
    public function getDomainID() : ?string
    {
        return $this->domainID;
    }

    /**
     * @param null | string $domainID
     * @return static
     */
    public function withDomainID(?string $domainID) : static
    {
        $new = clone $this;
        $new->domainID = $domainID;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc
     */
    public function getXmlDoc() : ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc
    {
        return $this->xmlDoc;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc $xmlDoc
     * @return static
     */
    public function withXmlDoc(?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\XmlDoc $xmlDoc) : static
    {
        $new = clone $this;
        $new->xmlDoc = $xmlDoc;

        return $new;
    }
}


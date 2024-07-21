<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Sales\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProcessRecognizedSalesInvoices implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionId = null;

    /**
     * @var null | string
     */
    private ?string $administrationId = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc $xmlDoc = null;

    /**
     * Constructor
     *
     * @param null | string $sessionId
     * @param null | string $administrationId
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc $xmlDoc
     */
    public function __construct(?string $sessionId, ?string $administrationId, ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc $xmlDoc)
    {
        $this->sessionId = $sessionId;
        $this->administrationId = $administrationId;
        $this->xmlDoc = $xmlDoc;
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
    public function getAdministrationId() : ?string
    {
        return $this->administrationId;
    }

    /**
     * @param null | string $administrationId
     * @return static
     */
    public function withAdministrationId(?string $administrationId) : static
    {
        $new = clone $this;
        $new->administrationId = $administrationId;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc
     */
    public function getXmlDoc() : ?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc
    {
        return $this->xmlDoc;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc $xmlDoc
     * @return static
     */
    public function withXmlDoc(?\MaartenDeBlock\YukiApiClient\SubClient\Sales\Type\XmlDoc $xmlDoc) : static
    {
        $new = clone $this;
        $new->xmlDoc = $xmlDoc;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ProcessPurchaseInvoices implements RequestInterface
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
     * @var null | string
     */
    private ?string $disableAutoCorrect = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc $xmlDoc = null;

    /**
     * Constructor
     *
     * @param null | string $sessionId
     * @param null | string $administrationId
     * @param null | string $disableAutoCorrect
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc $xmlDoc
     */
    public function __construct(?string $sessionId, ?string $administrationId, ?string $disableAutoCorrect, ?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc $xmlDoc)
    {
        $this->sessionId = $sessionId;
        $this->administrationId = $administrationId;
        $this->disableAutoCorrect = $disableAutoCorrect;
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
     * @return null | string
     */
    public function getDisableAutoCorrect() : ?string
    {
        return $this->disableAutoCorrect;
    }

    /**
     * @param null | string $disableAutoCorrect
     * @return static
     */
    public function withDisableAutoCorrect(?string $disableAutoCorrect) : static
    {
        $new = clone $this;
        $new->disableAutoCorrect = $disableAutoCorrect;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc
     */
    public function getXmlDoc() : ?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc
    {
        return $this->xmlDoc;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc $xmlDoc
     * @return static
     */
    public function withXmlDoc(?\MaartenDeBlock\YukiApiClient\SubClient\Purchase\Type\XmlDoc $xmlDoc) : static
    {
        $new = clone $this;
        $new->xmlDoc = $xmlDoc;

        return $new;
    }
}


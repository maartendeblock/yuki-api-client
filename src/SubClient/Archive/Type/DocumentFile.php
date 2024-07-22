<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DocumentFile implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $documentID = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $documentID
     */
    public function __construct(?string $sessionID, ?string $documentID)
    {
        $this->sessionID = $sessionID;
        $this->documentID = $documentID;
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
    public function getDocumentID() : ?string
    {
        return $this->documentID;
    }

    /**
     * @param null | string $documentID
     * @return static
     */
    public function withDocumentID(?string $documentID) : static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }
}


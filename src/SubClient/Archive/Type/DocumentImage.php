<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DocumentImage implements RequestInterface
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
     * @var int
     */
    private int $maxWidth;

    /**
     * @var int
     */
    private int $maxHeight;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $documentID
     * @param int $maxWidth
     * @param int $maxHeight
     */
    public function __construct(?string $sessionID, ?string $documentID, int $maxWidth, int $maxHeight)
    {
        $this->sessionID = $sessionID;
        $this->documentID = $documentID;
        $this->maxWidth = $maxWidth;
        $this->maxHeight = $maxHeight;
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

    /**
     * @return int
     */
    public function getMaxWidth() : int
    {
        return $this->maxWidth;
    }

    /**
     * @param int $maxWidth
     * @return static
     */
    public function withMaxWidth(int $maxWidth) : static
    {
        $new = clone $this;
        $new->maxWidth = $maxWidth;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxHeight() : int
    {
        return $this->maxHeight;
    }

    /**
     * @param int $maxHeight
     * @return static
     */
    public function withMaxHeight(int $maxHeight) : static
    {
        $new = clone $this;
        $new->maxHeight = $maxHeight;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DocumentFolderTabs implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $folderID = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $folderID
     */
    public function __construct(?string $sessionID, ?string $folderID)
    {
        $this->sessionID = $sessionID;
        $this->folderID = $folderID;
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
    public function getFolderID() : ?string
    {
        return $this->folderID;
    }

    /**
     * @param null | string $folderID
     * @return static
     */
    public function withFolderID(?string $folderID) : static
    {
        $new = clone $this;
        $new->folderID = $folderID;

        return $new;
    }
}


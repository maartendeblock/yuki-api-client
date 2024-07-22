<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadDocument implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $fileName = null;

    /**
     * @var null | mixed
     */
    private mixed $data = null;

    /**
     * @var int
     */
    private int $folder;

    /**
     * @var null | string
     */
    private ?string $administrationID = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $fileName
     * @param null | mixed $data
     * @param int $folder
     * @param null | string $administrationID
     */
    public function __construct(?string $sessionID, ?string $fileName, mixed $data, int $folder, ?string $administrationID)
    {
        $this->sessionID = $sessionID;
        $this->fileName = $fileName;
        $this->data = $data;
        $this->folder = $folder;
        $this->administrationID = $administrationID;
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
    public function getFileName() : ?string
    {
        return $this->fileName;
    }

    /**
     * @param null | string $fileName
     * @return static
     */
    public function withFileName(?string $fileName) : static
    {
        $new = clone $this;
        $new->fileName = $fileName;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getData() : mixed
    {
        return $this->data;
    }

    /**
     * @param null | mixed $data
     * @return static
     */
    public function withData(mixed $data) : static
    {
        $new = clone $this;
        $new->data = $data;

        return $new;
    }

    /**
     * @return int
     */
    public function getFolder() : int
    {
        return $this->folder;
    }

    /**
     * @param int $folder
     * @return static
     */
    public function withFolder(int $folder) : static
    {
        $new = clone $this;
        $new->folder = $folder;

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
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class Document
{
    /**
     * @var int
     */
    private int $HID;

    /**
     * @var null | string
     */
    private ?string $reference = null;

    /**
     * @var null | string
     */
    private ?string $type = null;

    /**
     * @var null | string
     */
    private ?string $typeDescription = null;

    /**
     * @var null | int
     */
    private ?int $folderId = null;

    /**
     * @var null | string
     */
    private ?string $folder = null;

    /**
     * @var null | int
     */
    private ?int $folderTabId = null;

    /**
     * @var null | string
     */
    private ?string $folderTab = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $created;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $modified = null;

    /**
     * @var null | string
     */
    private ?string $uploadMethod = null;

    /**
     * @var null | string
     */
    private ?string $id = null;

    /**
     * @return int
     */
    public function getHID() : int
    {
        return $this->HID;
    }

    /**
     * @param int $HID
     * @return static
     */
    public function withHID(int $HID) : static
    {
        $new = clone $this;
        $new->HID = $HID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference() : ?string
    {
        return $this->reference;
    }

    /**
     * @param null | string $reference
     * @return static
     */
    public function withReference(?string $reference) : static
    {
        $new = clone $this;
        $new->reference = $reference;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTypeDescription() : ?string
    {
        return $this->typeDescription;
    }

    /**
     * @param null | string $typeDescription
     * @return static
     */
    public function withTypeDescription(?string $typeDescription) : static
    {
        $new = clone $this;
        $new->typeDescription = $typeDescription;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getFolderId() : ?int
    {
        return $this->folderId;
    }

    /**
     * @param null | int $folderId
     * @return static
     */
    public function withFolderId(?int $folderId) : static
    {
        $new = clone $this;
        $new->folderId = $folderId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFolder() : ?string
    {
        return $this->folder;
    }

    /**
     * @param null | string $folder
     * @return static
     */
    public function withFolder(?string $folder) : static
    {
        $new = clone $this;
        $new->folder = $folder;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getFolderTabId() : ?int
    {
        return $this->folderTabId;
    }

    /**
     * @param null | int $folderTabId
     * @return static
     */
    public function withFolderTabId(?int $folderTabId) : static
    {
        $new = clone $this;
        $new->folderTabId = $folderTabId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFolderTab() : ?string
    {
        return $this->folderTab;
    }

    /**
     * @param null | string $folderTab
     * @return static
     */
    public function withFolderTab(?string $folderTab) : static
    {
        $new = clone $this;
        $new->folderTab = $folderTab;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreated() : \DateTimeInterface
    {
        return $this->created;
    }

    /**
     * @param \DateTimeInterface $created
     * @return static
     */
    public function withCreated(\DateTimeInterface $created) : static
    {
        $new = clone $this;
        $new->created = $created;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getModified() : ?\DateTimeInterface
    {
        return $this->modified;
    }

    /**
     * @param null | \DateTimeInterface $modified
     * @return static
     */
    public function withModified(?\DateTimeInterface $modified) : static
    {
        $new = clone $this;
        $new->modified = $modified;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUploadMethod() : ?string
    {
        return $this->uploadMethod;
    }

    /**
     * @param null | string $uploadMethod
     * @return static
     */
    public function withUploadMethod(?string $uploadMethod) : static
    {
        $new = clone $this;
        $new->uploadMethod = $uploadMethod;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getId() : ?string
    {
        return $this->id;
    }

    /**
     * @param null | string $id
     * @return static
     */
    public function withId(?string $id) : static
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }
}


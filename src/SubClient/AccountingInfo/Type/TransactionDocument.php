<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class TransactionDocument
{
    /**
     * @var null | string
     */
    private ?string $fileName = null;

    /**
     * @var null | mixed
     */
    private mixed $filedata = null;

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
    public function getFiledata() : mixed
    {
        return $this->filedata;
    }

    /**
     * @param null | mixed $filedata
     * @return static
     */
    public function withFiledata(mixed $filedata) : static
    {
        $new = clone $this;
        $new->filedata = $filedata;

        return $new;
    }
}


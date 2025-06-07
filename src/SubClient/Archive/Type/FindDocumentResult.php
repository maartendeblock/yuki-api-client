<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

class FindDocumentResult
{
    /**
     * @var mixed
     */
    private mixed $any;

    /**
     * @return mixed
     */
    public function getAny() : mixed
    {
        return $this->any;
    }

    /**
     * @param mixed $any
     * @return static
     */
    public function withAny(mixed $any) : static
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}


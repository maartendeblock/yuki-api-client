<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class MenuResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResult $MenuResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResult
     */
    public function getMenuResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResult
    {
        return $this->MenuResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResult $MenuResult
     * @return static
     */
    public function withMenuResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\MenuResult $MenuResult) : static
    {
        $new = clone $this;
        $new->MenuResult = $MenuResult;

        return $new;
    }
}


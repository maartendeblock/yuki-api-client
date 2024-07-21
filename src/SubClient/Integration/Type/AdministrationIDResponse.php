<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Integration\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AdministrationIDResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $AdministrationIDResult = null;

    /**
     * @return null | string
     */
    public function getAdministrationIDResult() : ?string
    {
        return $this->AdministrationIDResult;
    }

    /**
     * @param null | string $AdministrationIDResult
     * @return static
     */
    public function withAdministrationIDResult(?string $AdministrationIDResult) : static
    {
        $new = clone $this;
        $new->AdministrationIDResult = $AdministrationIDResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProjectsAndIDResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProject
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProject $GetProjectsAndIDResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProject
     */
    public function getGetProjectsAndIDResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProject
    {
        return $this->GetProjectsAndIDResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProject $GetProjectsAndIDResult
     * @return static
     */
    public function withGetProjectsAndIDResult(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\ArrayOfProject $GetProjectsAndIDResult) : static
    {
        $new = clone $this;
        $new->GetProjectsAndIDResult = $GetProjectsAndIDResult;

        return $new;
    }
}


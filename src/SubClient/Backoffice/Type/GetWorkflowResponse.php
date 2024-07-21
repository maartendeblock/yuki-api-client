<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetWorkflowResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetWorkflowResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetWorkflowResult $GetWorkflowResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetWorkflowResult
     */
    public function getGetWorkflowResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetWorkflowResult
    {
        return $this->GetWorkflowResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetWorkflowResult $GetWorkflowResult
     * @return static
     */
    public function withGetWorkflowResult(?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetWorkflowResult $GetWorkflowResult) : static
    {
        $new = clone $this;
        $new->GetWorkflowResult = $GetWorkflowResult;

        return $new;
    }
}


<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetOutstandingQuestionsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetOutstandingQuestionsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetOutstandingQuestionsResult $GetOutstandingQuestionsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetOutstandingQuestionsResult
     */
    public function getGetOutstandingQuestionsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetOutstandingQuestionsResult
    {
        return $this->GetOutstandingQuestionsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetOutstandingQuestionsResult $GetOutstandingQuestionsResult
     * @return static
     */
    public function withGetOutstandingQuestionsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Backoffice\Type\GetOutstandingQuestionsResult $GetOutstandingQuestionsResult) : static
    {
        $new = clone $this;
        $new->GetOutstandingQuestionsResult = $GetOutstandingQuestionsResult;

        return $new;
    }
}


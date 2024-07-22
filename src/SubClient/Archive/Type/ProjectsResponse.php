<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Archive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProjectsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResult $ProjectsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResult
     */
    public function getProjectsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResult
    {
        return $this->ProjectsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResult $ProjectsResult
     * @return static
     */
    public function withProjectsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Archive\Type\ProjectsResult $ProjectsResult) : static
    {
        $new = clone $this;
        $new->ProjectsResult = $ProjectsResult;

        return $new;
    }
}


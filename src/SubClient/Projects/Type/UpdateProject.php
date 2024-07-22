<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Projects\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateProject implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $sessionID = null;

    /**
     * @var null | string
     */
    private ?string $administrationID = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project $project = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project $project
     */
    public function __construct(?string $sessionID, ?string $administrationID, ?\MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project $project)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->project = $project;
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

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project
     */
    public function getProject() : ?\MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project
    {
        return $this->project;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project $project
     * @return static
     */
    public function withProject(?\MaartenDeBlock\YukiApiClient\SubClient\Projects\Type\Project $project) : static
    {
        $new = clone $this;
        $new->project = $project;

        return $new;
    }
}


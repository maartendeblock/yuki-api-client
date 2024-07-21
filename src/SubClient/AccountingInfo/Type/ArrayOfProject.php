<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfProject
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Project>
     */
    private ?array $Project = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Project>
     */
    public function getProject() : ?array
    {
        return $this->Project;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\Project> $Project
     * @return static
     */
    public function withProject(?array $Project) : static
    {
        $new = clone $this;
        $new->Project = $Project;

        return $new;
    }
}


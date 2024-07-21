<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class DefaultValue
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\InputFields
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\InputFields $InputFields = null;

    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\OutputFields
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\OutputFields $OutputFields = null;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Created;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\InputFields
     */
    public function getInputFields() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\InputFields
    {
        return $this->InputFields;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\InputFields $InputFields
     * @return static
     */
    public function withInputFields(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\InputFields $InputFields) : static
    {
        $new = clone $this;
        $new->InputFields = $InputFields;

        return $new;
    }

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\OutputFields
     */
    public function getOutputFields() : ?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\OutputFields
    {
        return $this->OutputFields;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\OutputFields $OutputFields
     * @return static
     */
    public function withOutputFields(?\MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\OutputFields $OutputFields) : static
    {
        $new = clone $this;
        $new->OutputFields = $OutputFields;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreated() : \DateTimeInterface
    {
        return $this->Created;
    }

    /**
     * @param \DateTimeInterface $Created
     * @return static
     */
    public function withCreated(\DateTimeInterface $Created) : static
    {
        $new = clone $this;
        $new->Created = $Created;

        return $new;
    }
}


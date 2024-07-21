<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class ArrayOfGlAccount
{
    /**
     * @var null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GlAccount>
     */
    private ?array $GlAccount = null;

    /**
     * @return null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GlAccount>
     */
    public function getGlAccount() : ?array
    {
        return $this->GlAccount;
    }

    /**
     * @param null | array<int<0,max>, \MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type\GlAccount> $GlAccount
     * @return static
     */
    public function withGlAccount(?array $GlAccount) : static
    {
        $new = clone $this;
        $new->GlAccount = $GlAccount;

        return $new;
    }
}


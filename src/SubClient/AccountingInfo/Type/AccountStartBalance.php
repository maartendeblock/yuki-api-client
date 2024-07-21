<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

class AccountStartBalance
{
    /**
     * @var null | string
     */
    private ?string $accountID = null;

    /**
     * @var null | string
     */
    private ?string $startBalance = null;

    /**
     * @var null | string
     */
    private ?string $accountDescription = null;

    /**
     * @return null | string
     */
    public function getAccountID() : ?string
    {
        return $this->accountID;
    }

    /**
     * @param null | string $accountID
     * @return static
     */
    public function withAccountID(?string $accountID) : static
    {
        $new = clone $this;
        $new->accountID = $accountID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStartBalance() : ?string
    {
        return $this->startBalance;
    }

    /**
     * @param null | string $startBalance
     * @return static
     */
    public function withStartBalance(?string $startBalance) : static
    {
        $new = clone $this;
        $new->startBalance = $startBalance;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountDescription() : ?string
    {
        return $this->accountDescription;
    }

    /**
     * @param null | string $accountDescription
     * @return static
     */
    public function withAccountDescription(?string $accountDescription) : static
    {
        $new = clone $this;
        $new->accountDescription = $accountDescription;

        return $new;
    }
}


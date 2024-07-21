<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetProjects implements RequestInterface
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
     * @var 'All' | 'Company' | 'Code' | 'Description'
     */
    private string $searchOption;

    /**
     * @var null | string
     */
    private ?string $searchValue = null;

    /**
     * Constructor
     *
     * @param null | string $sessionID
     * @param null | string $administrationID
     * @param 'All' | 'Company' | 'Code' | 'Description' $searchOption
     * @param null | string $searchValue
     */
    public function __construct(?string $sessionID, ?string $administrationID, string $searchOption, ?string $searchValue)
    {
        $this->sessionID = $sessionID;
        $this->administrationID = $administrationID;
        $this->searchOption = $searchOption;
        $this->searchValue = $searchValue;
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
     * @return 'All' | 'Company' | 'Code' | 'Description'
     */
    public function getSearchOption() : string
    {
        return $this->searchOption;
    }

    /**
     * @param 'All' | 'Company' | 'Code' | 'Description' $searchOption
     * @return static
     */
    public function withSearchOption(string $searchOption) : static
    {
        $new = clone $this;
        $new->searchOption = $searchOption;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSearchValue() : ?string
    {
        return $this->searchValue;
    }

    /**
     * @param null | string $searchValue
     * @return static
     */
    public function withSearchValue(?string $searchValue) : static
    {
        $new = clone $this;
        $new->searchValue = $searchValue;

        return $new;
    }
}


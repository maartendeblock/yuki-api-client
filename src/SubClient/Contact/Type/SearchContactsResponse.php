<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Contact\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SearchContactsResponse implements ResultInterface
{
    /**
     * @var null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\SearchContactsResult
     */
    private ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\SearchContactsResult $SearchContactsResult = null;

    /**
     * @return null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\SearchContactsResult
     */
    public function getSearchContactsResult() : ?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\SearchContactsResult
    {
        return $this->SearchContactsResult;
    }

    /**
     * @param null | \MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\SearchContactsResult $SearchContactsResult
     * @return static
     */
    public function withSearchContactsResult(?\MaartenDeBlock\YukiApiClient\SubClient\Contact\Type\SearchContactsResult $SearchContactsResult) : static
    {
        $new = clone $this;
        $new->SearchContactsResult = $SearchContactsResult;

        return $new;
    }
}


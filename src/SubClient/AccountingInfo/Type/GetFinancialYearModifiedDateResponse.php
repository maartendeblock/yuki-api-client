<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\AccountingInfo\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetFinancialYearModifiedDateResponse implements ResultInterface
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $GetFinancialYearModifiedDateResult;

    /**
     * @return \DateTimeInterface
     */
    public function getGetFinancialYearModifiedDateResult() : \DateTimeInterface
    {
        return $this->GetFinancialYearModifiedDateResult;
    }

    /**
     * @param \DateTimeInterface $GetFinancialYearModifiedDateResult
     * @return static
     */
    public function withGetFinancialYearModifiedDateResult(\DateTimeInterface $GetFinancialYearModifiedDateResult) : static
    {
        $new = clone $this;
        $new->GetFinancialYearModifiedDateResult = $GetFinancialYearModifiedDateResult;

        return $new;
    }
}


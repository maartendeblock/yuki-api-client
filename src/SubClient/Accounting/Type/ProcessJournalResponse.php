<?php

namespace MaartenDeBlock\YukiApiClient\SubClient\Accounting\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessJournalResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $ProcessJournalResult = null;

    /**
     * @return null | string
     */
    public function getProcessJournalResult() : ?string
    {
        return $this->ProcessJournalResult;
    }

    /**
     * @param null | string $ProcessJournalResult
     * @return static
     */
    public function withProcessJournalResult(?string $ProcessJournalResult) : static
    {
        $new = clone $this;
        $new->ProcessJournalResult = $ProcessJournalResult;

        return $new;
    }
}


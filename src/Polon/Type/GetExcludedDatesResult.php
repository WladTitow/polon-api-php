<?php

namespace Polon\Type;

class GetExcludedDatesResult
{

    /**
     * @var \Polon\Type\ExcludedDateTab
     */
    private $ExcludedDate_Tab;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return \Polon\Type\ExcludedDateTab
     */
    public function getExcludedDate_Tab()
    {
        return $this->ExcludedDate_Tab;
    }

    /**
     * @param \Polon\Type\ExcludedDateTab $ExcludedDate_Tab
     * @return GetExcludedDatesResult
     */
    public function withExcludedDate_Tab($ExcludedDate_Tab)
    {
        $new = clone $this;
        $new->ExcludedDate_Tab = $ExcludedDate_Tab;

        return $new;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param int $Result
     * @return GetExcludedDatesResult
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return GetExcludedDatesResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


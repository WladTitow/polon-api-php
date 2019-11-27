<?php

namespace Polon\Type;

class GetBalanceResult
{

    /**
     * @var float
     */
    private $Balance;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return float
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @param float $Balance
     * @return GetBalanceResult
     */
    public function withBalance($Balance)
    {
        $new = clone $this;
        $new->Balance = $Balance;

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
     * @return GetBalanceResult
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
     * @return GetBalanceResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


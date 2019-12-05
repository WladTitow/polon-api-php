<?php

namespace Polon\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetPriceDataResult implements RequestInterface
{

    /**
     * @var string
     */
    private $Currency;

    /**
     * @var \Polon\Type\PriceTab
     */
    private $Price_Tab;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return GetPriceDataResult
     */
    public function withCurrency($Currency)
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return \Polon\Type\PriceTab
     */
    public function getPrice_Tab()
    {
        return $this->Price_Tab;
    }

    /**
     * @param \Polon\Type\PriceTab $Price_Tab
     * @return GetPriceDataResult
     */
    public function withPrice_Tab($Price_Tab)
    {
        $new = clone $this;
        $new->Price_Tab = $Price_Tab;

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
     * @return GetPriceDataResult
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
     * @return GetPriceDataResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


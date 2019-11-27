<?php

namespace Polon\Type;

class GetOrderListResult
{

    /**
     * @var \Polon\Type\OrderListTab
     */
    private $OrderList_Tab;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return \Polon\Type\OrderListTab
     */
    public function getOrderList_Tab()
    {
        return $this->OrderList_Tab;
    }

    /**
     * @param \Polon\Type\OrderListTab $OrderList_Tab
     * @return GetOrderListResult
     */
    public function withOrderList_Tab($OrderList_Tab)
    {
        $new = clone $this;
        $new->OrderList_Tab = $OrderList_Tab;

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
     * @return GetOrderListResult
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
     * @return GetOrderListResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


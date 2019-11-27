<?php

namespace Polon\Type;

class GetOrderResult
{

    /**
     * @var \DateTimeInterface
     */
    private $OrderDate;

    /**
     * @var \Polon\Type\OrderItems
     */
    private $OrderItems;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return \DateTimeInterface
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param \DateTimeInterface $OrderDate
     * @return GetOrderResult
     */
    public function withOrderDate($OrderDate)
    {
        $new = clone $this;
        $new->OrderDate = $OrderDate;

        return $new;
    }

    /**
     * @return \Polon\Type\OrderItems
     */
    public function getOrderItems()
    {
        return $this->OrderItems;
    }

    /**
     * @param \Polon\Type\OrderItems $OrderItems
     * @return GetOrderResult
     */
    public function withOrderItems($OrderItems)
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

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
     * @return GetOrderResult
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
     * @return GetOrderResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


<?php

namespace Polon\Type;

class SetSignOrder
{

    /**
     * @var string
     */
    private $DocumentNumber;

    /**
     * @var \Polon\Type\OrderItems
     */
    private $OrderItems;

    /**
     * @var \Polon\Type\NewOrderDate
     */
    private $NewOrderDate;

    /**
     * @var \Polon\Type\OrderItems
     */
    private $ItemsForTransfer;

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return SetSignOrder
     */
    public function withDocumentNumber($DocumentNumber)
    {
        $new = clone $this;
        $new->DocumentNumber = $DocumentNumber;

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
     * @return SetSignOrder
     */
    public function withOrderItems($OrderItems)
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

        return $new;
    }

    /**
     * @return \Polon\Type\NewOrderDate
     */
    public function getNewOrderDate()
    {
        return $this->NewOrderDate;
    }

    /**
     * @param \Polon\Type\NewOrderDate $NewOrderDate
     * @return SetSignOrder
     */
    public function withNewOrderDate($NewOrderDate)
    {
        $new = clone $this;
        $new->NewOrderDate = $NewOrderDate;

        return $new;
    }

    /**
     * @return \Polon\Type\OrderItems
     */
    public function getItemsForTransfer()
    {
        return $this->ItemsForTransfer;
    }

    /**
     * @param \Polon\Type\OrderItems $ItemsForTransfer
     * @return SetSignOrder
     */
    public function withItemsForTransfer($ItemsForTransfer)
    {
        $new = clone $this;
        $new->ItemsForTransfer = $ItemsForTransfer;

        return $new;
    }


}


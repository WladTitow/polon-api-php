<?php

namespace Polon\Type;

class SetOrderChange
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
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return SetOrderChange
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
     * @return SetOrderChange
     */
    public function withOrderItems($OrderItems)
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

        return $new;
    }


}


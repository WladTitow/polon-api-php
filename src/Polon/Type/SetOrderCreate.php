<?php

namespace Polon\Type;

class SetOrderCreate
{

    /**
     * @var string
     */
    private $Werks;

    /**
     * @var \DateTimeInterface
     */
    private $OrderDate;

    /**
     * @var \Polon\Type\OrderItems
     */
    private $OrderItems;

    /**
     * @return string
     */
    public function getWerks()
    {
        return $this->Werks;
    }

    /**
     * @param string $Werks
     * @return SetOrderCreate
     */
    public function withWerks($Werks)
    {
        $new = clone $this;
        $new->Werks = $Werks;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param \DateTimeInterface $OrderDate
     * @return SetOrderCreate
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
     * @return SetOrderCreate
     */
    public function withOrderItems($OrderItems)
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

        return $new;
    }


}


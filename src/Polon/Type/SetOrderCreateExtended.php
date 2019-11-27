<?php

namespace Polon\Type;

class SetOrderCreateExtended
{

    /**
     * @var string
     */
    private $Buyer;

    /**
     * @var string
     */
    private $DeliveryPoint;

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
    public function getBuyer()
    {
        return $this->Buyer;
    }

    /**
     * @param string $Buyer
     * @return SetOrderCreateExtended
     */
    public function withBuyer($Buyer)
    {
        $new = clone $this;
        $new->Buyer = $Buyer;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeliveryPoint()
    {
        return $this->DeliveryPoint;
    }

    /**
     * @param string $DeliveryPoint
     * @return SetOrderCreateExtended
     */
    public function withDeliveryPoint($DeliveryPoint)
    {
        $new = clone $this;
        $new->DeliveryPoint = $DeliveryPoint;

        return $new;
    }

    /**
     * @return string
     */
    public function getWerks()
    {
        return $this->Werks;
    }

    /**
     * @param string $Werks
     * @return SetOrderCreateExtended
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
     * @return SetOrderCreateExtended
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
     * @return SetOrderCreateExtended
     */
    public function withOrderItems($OrderItems)
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

        return $new;
    }


}


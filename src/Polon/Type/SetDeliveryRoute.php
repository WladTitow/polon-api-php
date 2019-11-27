<?php

namespace Polon\Type;

class SetDeliveryRoute
{

    /**
     * @var \DateTimeInterface
     */
    private $ExpectedDate;

    /**
     * @var \Polon\Type\Vehicle
     */
    private $Vehicle;

    /**
     * @var \Polon\Type\OrdersTab
     */
    private $Orders_Tab;

    /**
     * @return \DateTimeInterface
     */
    public function getExpectedDate()
    {
        return $this->ExpectedDate;
    }

    /**
     * @param \DateTimeInterface $ExpectedDate
     * @return SetDeliveryRoute
     */
    public function withExpectedDate($ExpectedDate)
    {
        $new = clone $this;
        $new->ExpectedDate = $ExpectedDate;

        return $new;
    }

    /**
     * @return \Polon\Type\Vehicle
     */
    public function getVehicle()
    {
        return $this->Vehicle;
    }

    /**
     * @param \Polon\Type\Vehicle $Vehicle
     * @return SetDeliveryRoute
     */
    public function withVehicle($Vehicle)
    {
        $new = clone $this;
        $new->Vehicle = $Vehicle;

        return $new;
    }

    /**
     * @return \Polon\Type\OrdersTab
     */
    public function getOrders_Tab()
    {
        return $this->Orders_Tab;
    }

    /**
     * @param \Polon\Type\OrdersTab $Orders_Tab
     * @return SetDeliveryRoute
     */
    public function withOrders_Tab($Orders_Tab)
    {
        $new = clone $this;
        $new->Orders_Tab = $Orders_Tab;

        return $new;
    }


}


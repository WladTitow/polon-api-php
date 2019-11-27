<?php

namespace Polon\Type;

class SetOrderCreatePhys
{

    /**
     * @var string
     */
    private $Email;

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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return SetOrderCreatePhys
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

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
     * @return SetOrderCreatePhys
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
     * @return SetOrderCreatePhys
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
     * @return SetOrderCreatePhys
     */
    public function withOrderItems($OrderItems)
    {
        $new = clone $this;
        $new->OrderItems = $OrderItems;

        return $new;
    }


}


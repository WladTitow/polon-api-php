<?php

namespace Polon\Type;

class OrderList
{

    /**
     * @var string
     */
    private $DocumentNumber;

    /**
     * @var \DateTimeInterface
     */
    private $OrderDate;

    /**
     * @var float
     */
    private $OrderAmount;

    /**
     * @var int
     */
    private $Signed;

    /**
     * @var int
     */
    private $Deleted;

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return OrderList
     */
    public function withDocumentNumber($DocumentNumber)
    {
        $new = clone $this;
        $new->DocumentNumber = $DocumentNumber;

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
     * @return OrderList
     */
    public function withOrderDate($OrderDate)
    {
        $new = clone $this;
        $new->OrderDate = $OrderDate;

        return $new;
    }

    /**
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->OrderAmount;
    }

    /**
     * @param float $OrderAmount
     * @return OrderList
     */
    public function withOrderAmount($OrderAmount)
    {
        $new = clone $this;
        $new->OrderAmount = $OrderAmount;

        return $new;
    }

    /**
     * @return int
     */
    public function getSigned()
    {
        return $this->Signed;
    }

    /**
     * @param int $Signed
     * @return OrderList
     */
    public function withSigned($Signed)
    {
        $new = clone $this;
        $new->Signed = $Signed;

        return $new;
    }

    /**
     * @return int
     */
    public function getDeleted()
    {
        return $this->Deleted;
    }

    /**
     * @param int $Deleted
     * @return OrderList
     */
    public function withDeleted($Deleted)
    {
        $new = clone $this;
        $new->Deleted = $Deleted;

        return $new;
    }


}


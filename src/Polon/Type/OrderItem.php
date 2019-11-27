<?php

namespace Polon\Type;

class OrderItem
{

    /**
     * @var string
     */
    private $DocumentNumber;

    /**
     * @var string
     */
    private $PurchaseOrderNumber;

    /**
     * @var string
     */
    private $MaterialID;

    /**
     * @var string
     */
    private $MaterialText;

    /**
     * @var int
     */
    private $Quantity;

    /**
     * @var int
     */
    private $PosResult;

    /**
     * @var string
     */
    private $PosError;

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return OrderItem
     */
    public function withDocumentNumber($DocumentNumber)
    {
        $new = clone $this;
        $new->DocumentNumber = $DocumentNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->PurchaseOrderNumber;
    }

    /**
     * @param string $PurchaseOrderNumber
     * @return OrderItem
     */
    public function withPurchaseOrderNumber($PurchaseOrderNumber)
    {
        $new = clone $this;
        $new->PurchaseOrderNumber = $PurchaseOrderNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getMaterialID()
    {
        return $this->MaterialID;
    }

    /**
     * @param string $MaterialID
     * @return OrderItem
     */
    public function withMaterialID($MaterialID)
    {
        $new = clone $this;
        $new->MaterialID = $MaterialID;

        return $new;
    }

    /**
     * @return string
     */
    public function getMaterialText()
    {
        return $this->MaterialText;
    }

    /**
     * @param string $MaterialText
     * @return OrderItem
     */
    public function withMaterialText($MaterialText)
    {
        $new = clone $this;
        $new->MaterialText = $MaterialText;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return OrderItem
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }

    /**
     * @return int
     */
    public function getPosResult()
    {
        return $this->PosResult;
    }

    /**
     * @param int $PosResult
     * @return OrderItem
     */
    public function withPosResult($PosResult)
    {
        $new = clone $this;
        $new->PosResult = $PosResult;

        return $new;
    }

    /**
     * @return string
     */
    public function getPosError()
    {
        return $this->PosError;
    }

    /**
     * @param string $PosError
     * @return OrderItem
     */
    public function withPosError($PosError)
    {
        $new = clone $this;
        $new->PosError = $PosError;

        return $new;
    }


}


<?php

namespace Polon\Type;

class Price
{

    /**
     * @var string
     */
    private $MaterialID;

    /**
     * @var float
     */
    private $Price;

    /**
     * @return string
     */
    public function getMaterialID()
    {
        return $this->MaterialID;
    }

    /**
     * @param string $MaterialID
     * @return Price
     */
    public function withMaterialID($MaterialID)
    {
        $new = clone $this;
        $new->MaterialID = $MaterialID;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return Price
     */
    public function withPrice($Price)
    {
        $new = clone $this;
        $new->Price = $Price;

        return $new;
    }


}


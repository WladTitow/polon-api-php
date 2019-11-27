<?php

namespace Polon\Type;

class GetBalance
{

    /**
     * @var string
     */
    private $Buyer;

    /**
     * @return string
     */
    public function getBuyer()
    {
        return $this->Buyer;
    }

    /**
     * @param string $Buyer
     * @return GetBalance
     */
    public function withBuyer($Buyer)
    {
        $new = clone $this;
        $new->Buyer = $Buyer;

        return $new;
    }


}


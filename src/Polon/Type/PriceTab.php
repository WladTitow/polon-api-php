<?php

namespace Polon\Type;

class PriceTab
{

    /**
     * @var \Polon\Type\Price
     */
    private $item;

    /**
     * @return \Polon\Type\Price
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\Price $item
     * @return PriceTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


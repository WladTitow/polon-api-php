<?php

namespace Polon\Type;

class OrderItems
{

    /**
     * @var \Polon\Type\OrderItem
     */
    private $item;

    /**
     * @return \Polon\Type\OrderItem
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\OrderItem $item
     * @return OrderItems
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


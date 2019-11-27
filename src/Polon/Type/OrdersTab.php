<?php

namespace Polon\Type;

class OrdersTab
{

    /**
     * @var \Polon\Type\Order
     */
    private $item;

    /**
     * @return \Polon\Type\Order
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\Order $item
     * @return OrdersTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


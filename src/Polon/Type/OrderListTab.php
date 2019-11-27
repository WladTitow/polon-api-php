<?php

namespace Polon\Type;

class OrderListTab
{

    /**
     * @var \Polon\Type\OrderList
     */
    private $item;

    /**
     * @return \Polon\Type\OrderList
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\OrderList $item
     * @return OrderListTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


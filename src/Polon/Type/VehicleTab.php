<?php

namespace Polon\Type;

class VehicleTab
{

    /**
     * @var \Polon\Type\Vehicle
     */
    private $item;

    /**
     * @return \Polon\Type\Vehicle
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\Vehicle $item
     * @return VehicleTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


<?php

namespace Polon\Type;

class MaterialCharacteristics
{

    /**
     * @var \Polon\Type\MaterialCharacteristic
     */
    private $item;

    /**
     * @return \Polon\Type\MaterialCharacteristic
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\MaterialCharacteristic $item
     * @return MaterialCharacteristics
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


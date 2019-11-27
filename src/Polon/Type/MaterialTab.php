<?php

namespace Polon\Type;

class MaterialTab
{

    /**
     * @var \Polon\Type\Material
     */
    private $item;

    /**
     * @return \Polon\Type\Material
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\Material $item
     * @return MaterialTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


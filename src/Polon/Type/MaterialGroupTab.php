<?php

namespace Polon\Type;

class MaterialGroupTab
{

    /**
     * @var \Polon\Type\MaterialGroup
     */
    private $item;

    /**
     * @return \Polon\Type\MaterialGroup
     */
    public function getItem()
    {
        return $this->item;
    }

    public function addMaterialGroup($MaterialGroup)
    {
        $this->item = $MaterialGroup;
    }

    /**
     * @param \Polon\Type\MaterialGroup $item
     * @return MaterialGroupTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


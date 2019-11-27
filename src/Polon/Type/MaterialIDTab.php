<?php

namespace Polon\Type;

class MaterialIDTab
{

    /**
     * @var \Polon\Type\MaterialID
     */
    private $item;

    /**
     * @return \Polon\Type\MaterialID
     */
    public function getItem()
    {
        return $this->item;
    }

    public function addMaterialID($MaterialID)
    {
        $this->item = $MaterialID;
    }

    /**
     * @param \Polon\Type\MaterialID $item
     * @return MaterialIDTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


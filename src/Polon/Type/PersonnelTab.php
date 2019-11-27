<?php

namespace Polon\Type;

class PersonnelTab
{

    /**
     * @var \Polon\Type\Personnel
     */
    private $item;

    /**
     * @return \Polon\Type\Personnel
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\Personnel $item
     * @return PersonnelTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


<?php

namespace Polon\Type;

class ExcludedDateTab
{

    /**
     * @var \Polon\Type\ExcludedDate
     */
    private $item;

    /**
     * @return \Polon\Type\ExcludedDate
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param \Polon\Type\ExcludedDate $item
     * @return ExcludedDateTab
     */
    public function withItem($item)
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }


}


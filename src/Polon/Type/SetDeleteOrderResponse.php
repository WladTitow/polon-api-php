<?php

namespace Polon\Type;

class SetDeleteOrderResponse
{

    /**
     * @var \Polon\Type\SetDeleteOrderResult
     */
    private $return;

    /**
     * @return \Polon\Type\SetDeleteOrderResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\SetDeleteOrderResult $return
     * @return SetDeleteOrderResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


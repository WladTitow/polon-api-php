<?php

namespace Polon\Type;

class SetSignOrderResponse
{

    /**
     * @var \Polon\Type\SetSignOrderResult
     */
    private $return;

    /**
     * @return \Polon\Type\SetSignOrderResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\SetSignOrderResult $return
     * @return SetSignOrderResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


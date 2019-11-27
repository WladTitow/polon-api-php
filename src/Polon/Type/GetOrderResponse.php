<?php

namespace Polon\Type;

class GetOrderResponse
{

    /**
     * @var \Polon\Type\GetOrderResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetOrderResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetOrderResult $return
     * @return GetOrderResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


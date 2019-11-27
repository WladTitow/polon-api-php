<?php

namespace Polon\Type;

class GetOrderListResponse
{

    /**
     * @var \Polon\Type\GetOrderListResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetOrderListResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetOrderListResult $return
     * @return GetOrderListResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


<?php

namespace Polon\Type;

class SetFinalOrderResponse
{

    /**
     * @var \Polon\Type\SetFinalOrderResult
     */
    private $return;

    /**
     * @return \Polon\Type\SetFinalOrderResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\SetFinalOrderResult $return
     * @return SetFinalOrderResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


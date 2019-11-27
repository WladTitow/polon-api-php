<?php

namespace Polon\Type;

class SetOrderChangeResponse
{

    /**
     * @var \Polon\Type\SetOrderChangeResult
     */
    private $return;

    /**
     * @return \Polon\Type\SetOrderChangeResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\SetOrderChangeResult $return
     * @return SetOrderChangeResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


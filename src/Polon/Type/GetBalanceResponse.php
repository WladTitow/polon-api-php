<?php

namespace Polon\Type;

class GetBalanceResponse
{

    /**
     * @var \Polon\Type\GetBalanceResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetBalanceResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetBalanceResult $return
     * @return GetBalanceResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


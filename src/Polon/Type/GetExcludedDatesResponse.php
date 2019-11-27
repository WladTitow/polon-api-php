<?php

namespace Polon\Type;

class GetExcludedDatesResponse
{

    /**
     * @var \Polon\Type\GetExcludedDatesResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetExcludedDatesResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetExcludedDatesResult $return
     * @return GetExcludedDatesResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


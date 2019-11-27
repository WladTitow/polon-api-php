<?php

namespace Polon\Type;

class GetOperationResultResponse
{

    /**
     * @var \Polon\Type\GetOperationResultResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetOperationResultResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetOperationResultResult $return
     * @return GetOperationResultResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


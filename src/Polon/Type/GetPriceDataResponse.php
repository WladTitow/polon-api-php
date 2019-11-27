<?php

namespace Polon\Type;

class GetPriceDataResponse
{

    /**
     * @var \Polon\Type\GetPriceDataResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetPriceDataResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetPriceDataResult $return
     * @return GetPriceDataResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


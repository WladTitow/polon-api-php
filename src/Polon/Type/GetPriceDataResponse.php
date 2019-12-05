<?php

namespace Polon\Type;

use Phpro\SoapClient\Type\ResultInterface;
class GetPriceDataResponse implements ResultInterface
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


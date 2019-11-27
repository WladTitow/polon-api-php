<?php

namespace Polon\Type;

use Phpro\SoapClient\Type\ResultInterface;
//use Phpro\SoapClient\Type\MixedResult;

class GetItemsAvailResponse 
//implements MixedResult
implements ResultInterface
{

    /**
     * @var \Polon\Type\GetItemsAvailResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetItemsAvailResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetItemsAvailResult $return
     * @return GetItemsAvailResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


<?php

namespace Polon\Type;

class SetDeliveryRouteResponse
{

    /**
     * @var \Polon\Type\SetDeliveryRouteResult
     */
    private $return;

    /**
     * @return \Polon\Type\SetDeliveryRouteResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\SetDeliveryRouteResult $return
     * @return SetDeliveryRouteResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


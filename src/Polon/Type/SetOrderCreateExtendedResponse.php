<?php

namespace Polon\Type;

class SetOrderCreateExtendedResponse
{

    /**
     * @var \Polon\Type\SetOrderCreateResult
     */
    private $return;

    /**
     * @return \Polon\Type\SetOrderCreateResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\SetOrderCreateResult $return
     * @return SetOrderCreateExtendedResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


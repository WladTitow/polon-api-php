<?php

namespace Polon\Type;

class GetMaterialDataResponse
{

    /**
     * @var \Polon\Type\GetMaterialDataResult
     */
    private $return;

    /**
     * @return \Polon\Type\GetMaterialDataResult
     */
    public function getReturn()
    {
        return $this->return;
    }

    /**
     * @param \Polon\Type\GetMaterialDataResult $return
     * @return GetMaterialDataResponse
     */
    public function withReturn($return)
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }


}


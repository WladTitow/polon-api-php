<?php

namespace Polon\Type;

class GetOrderGUID
{

    /**
     * @var string
     */
    private $OperationID;

    /**
     * @return string
     */
    public function getOperationID()
    {
        return $this->OperationID;
    }

    /**
     * @param string $OperationID
     * @return GetOrderGUID
     */
    public function withOperationID($OperationID)
    {
        $new = clone $this;
        $new->OperationID = $OperationID;

        return $new;
    }


}


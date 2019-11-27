<?php

namespace Polon\Type;

class SetSignOrderResult
{

    /**
     * @var string
     */
    private $OperationID;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return string
     */
    public function getOperationID()
    {
        return $this->OperationID;
    }

    /**
     * @param string $OperationID
     * @return SetSignOrderResult
     */
    public function withOperationID($OperationID)
    {
        $new = clone $this;
        $new->OperationID = $OperationID;

        return $new;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param int $Result
     * @return SetSignOrderResult
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return SetSignOrderResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


<?php

namespace Polon\Type;

class SetOrderCreateResult
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
     * @return SetOrderCreateResult
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
     * @return SetOrderCreateResult
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
     * @return SetOrderCreateResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


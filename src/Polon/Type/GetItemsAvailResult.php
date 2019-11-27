<?php

namespace Polon\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetItemsAvailResult implements RequestInterface
{

    /**
     * @var \Polon\Type\MaterialTab
     */
    private $Material_Tab;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return \Polon\Type\MaterialTab
     */
    public function getMaterial_Tab()
    {
        return $this->Material_Tab;
    }

    /**
     * @param \Polon\Type\MaterialTab $Material_Tab
     * @return GetItemsAvailResult
     */
    public function withMaterial_Tab($Material_Tab)
    {
        $new = clone $this;
        $new->Material_Tab = $Material_Tab;

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
     * @return GetItemsAvailResult
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
     * @return GetItemsAvailResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


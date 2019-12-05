<?php

namespace Polon\Type;
use Phpro\SoapClient\Type\RequestInterface as RequestInterface;

class GetPriceData implements RequestInterface
{

    /**
     * @var string
     */
    private $Werks;

    /**
     * @return string
     */
    public function getWerks()
    {
        return $this->Werks;
    }

    /**
     * @param string $Werks
     * @return GetPriceData
     */
    public function withWerks($Werks)
    {
        $new = clone $this;
        $new->Werks = $Werks;

        return $new;
    }

    /**
     * @param string $werks
     */
    public function __construct($werks)
    {
        $this->Werks = $werks;
    }

}


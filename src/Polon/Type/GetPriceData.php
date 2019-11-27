<?php

namespace Polon\Type;

class GetPriceData
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


}


<?php

namespace Polon\Type;

class SetDeleteOrder
{

    /**
     * @var string
     */
    private $DocumentNumber;

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return SetDeleteOrder
     */
    public function withDocumentNumber($DocumentNumber)
    {
        $new = clone $this;
        $new->DocumentNumber = $DocumentNumber;

        return $new;
    }


}


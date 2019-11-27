<?php

namespace Polon\Type;

class GetOrderList
{

    /**
     * @var string
     */
    private $Status;

    /**
     * @var bool
     */
    private $B2BOnly;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return GetOrderList
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return bool
     */
    public function getB2BOnly()
    {
        return $this->B2BOnly;
    }

    /**
     * @param bool $B2BOnly
     * @return GetOrderList
     */
    public function withB2BOnly($B2BOnly)
    {
        $new = clone $this;
        $new->B2BOnly = $B2BOnly;

        return $new;
    }


}


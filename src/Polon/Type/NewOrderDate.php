<?php

namespace Polon\Type;

class NewOrderDate
{

    /**
     * @var \DateTimeInterface
     */
    private $NewOrderDate;

    /**
     * @return \DateTimeInterface
     */
    public function getNewOrderDate()
    {
        return $this->NewOrderDate;
    }

    /**
     * @param \DateTimeInterface $NewOrderDate
     * @return NewOrderDate
     */
    public function withNewOrderDate($NewOrderDate)
    {
        $new = clone $this;
        $new->NewOrderDate = $NewOrderDate;

        return $new;
    }


}


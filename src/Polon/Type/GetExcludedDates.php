<?php

namespace Polon\Type;

class GetExcludedDates
{

    /**
     * @var \DateTimeInterface
     */
    private $Date_From;

    /**
     * @var \DateTimeInterface
     */
    private $Date_To;

    /**
     * @return \DateTimeInterface
     */
    public function getDate_From()
    {
        return $this->Date_From;
    }

    /**
     * @param \DateTimeInterface $Date_From
     * @return GetExcludedDates
     */
    public function withDate_From($Date_From)
    {
        $new = clone $this;
        $new->Date_From = $Date_From;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate_To()
    {
        return $this->Date_To;
    }

    /**
     * @param \DateTimeInterface $Date_To
     * @return GetExcludedDates
     */
    public function withDate_To($Date_To)
    {
        $new = clone $this;
        $new->Date_To = $Date_To;

        return $new;
    }


}


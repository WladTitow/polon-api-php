<?php

namespace Polon\Type;

class ExcludedDate
{

    /**
     * @var \DateTimeInterface
     */
    private $ExcludedDate;

    /**
     * @var string
     */
    private $ExcludedCode;

    /**
     * @return \DateTimeInterface
     */
    public function getExcludedDate()
    {
        return $this->ExcludedDate;
    }

    /**
     * @param \DateTimeInterface $ExcludedDate
     * @return ExcludedDate
     */
    public function withExcludedDate($ExcludedDate)
    {
        $new = clone $this;
        $new->ExcludedDate = $ExcludedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getExcludedCode()
    {
        return $this->ExcludedCode;
    }

    /**
     * @param string $ExcludedCode
     * @return ExcludedDate
     */
    public function withExcludedCode($ExcludedCode)
    {
        $new = clone $this;
        $new->ExcludedCode = $ExcludedCode;

        return $new;
    }


}


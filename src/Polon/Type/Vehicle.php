<?php

namespace Polon\Type;

class Vehicle
{

    /**
     * @var string
     */
    private $CarNumber;

    /**
     * @var string
     */
    private $TrailerNumber;

    /**
     * @var \Polon\Type\PersonnelTab
     */
    private $Personnel_Tab;

    /**
     * @return string
     */
    public function getCarNumber()
    {
        return $this->CarNumber;
    }

    /**
     * @param string $CarNumber
     * @return Vehicle
     */
    public function withCarNumber($CarNumber)
    {
        $new = clone $this;
        $new->CarNumber = $CarNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrailerNumber()
    {
        return $this->TrailerNumber;
    }

    /**
     * @param string $TrailerNumber
     * @return Vehicle
     */
    public function withTrailerNumber($TrailerNumber)
    {
        $new = clone $this;
        $new->TrailerNumber = $TrailerNumber;

        return $new;
    }

    /**
     * @return \Polon\Type\PersonnelTab
     */
    public function getPersonnel_Tab()
    {
        return $this->Personnel_Tab;
    }

    /**
     * @param \Polon\Type\PersonnelTab $Personnel_Tab
     * @return Vehicle
     */
    public function withPersonnel_Tab($Personnel_Tab)
    {
        $new = clone $this;
        $new->Personnel_Tab = $Personnel_Tab;

        return $new;
    }


}


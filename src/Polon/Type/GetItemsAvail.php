<?php

namespace Polon\Type;
use Phpro\SoapClient\Type\RequestInterface as RequestInterface;

class GetItemsAvail implements RequestInterface
{

    /**
     * @var string
     */
    private $Werks;

    /**
     * @var \DateTimeInterface
     */
    private $Date;

    /**
     * @var \Polon\Type\MaterialIDTab
     */
    private $MaterialID_Tab;

    /**
     * @var \Polon\Type\MaterialGroupTab
     */
    private $MaterialGroup_Tab;

    /**
     * @return string
     */
    public function getWerks()
    {
        return $this->Werks;
    }

    /**
     * @param \DateTimeInterface $date
     * @param string $werks
     */
    public function __construct($date, $werks)
    {
        $this->Date = $date;
        $this->Werks = $werks;
    }

    public function addMaterialID_Tab($MaterialID_Tab)
    {
        $this->MaterialID_Tab = $MaterialID_Tab;
    }

    public function addMaterialGroup_Tab($MaterialGroup_Tab)
    {
        $this->MaterialGroup_Tab = $MaterialGroup_Tab;
    }

    /**
     * @param string $Werks
     * @return GetItemsAvail
     */
    public function withWerks($Werks)
    {
        $new = clone $this;
        $new->Werks = $Werks;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return GetItemsAvail
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return \Polon\Type\MaterialIDTab
     */
    public function getMaterialID_Tab()
    {
        return $this->MaterialID_Tab;
    }

    /**
     * @param \Polon\Type\MaterialIDTab $MaterialID_Tab
     * @return GetItemsAvail
     */
    public function withMaterialID_Tab($MaterialID_Tab)
    {
        $new = clone $this;
        $new->MaterialID_Tab = $MaterialID_Tab;

        return $new;
    }

    /**
     * @return \Polon\Type\MaterialGroupTab
     */
    public function getMaterialGroup_Tab()
    {
        return $this->MaterialGroup_Tab;
    }

    /**
     * @param \Polon\Type\MaterialGroupTab $MaterialGroup_Tab
     * @return GetItemsAvail
     */
    public function withMaterialGroup_Tab($MaterialGroup_Tab)
    {
        $new = clone $this;
        $new->MaterialGroup_Tab = $MaterialGroup_Tab;

        return $new;
    }


}


<?php

namespace Polon\Type;

class Material
{

    /**
     * @var string
     */
    private $MaterialID;

    /**
     * @var int
     */
    private $AvailableCount;

    /**
     * @return string
     */
    public function getMaterialID()
    {
        return $this->MaterialID;
    }

    /**
     * @param string $MaterialID
     * @return Material
     */
    public function withMaterialID($MaterialID)
    {
        $new = clone $this;
        $new->MaterialID = $MaterialID;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvailableCount()
    {
        return $this->AvailableCount;
    }

    /**
     * @param int $AvailableCount
     * @return Material
     */
    public function withAvailableCount($AvailableCount)
    {
        $new = clone $this;
        $new->AvailableCount = $AvailableCount;

        return $new;
    }


}


<?php

namespace Polon\Type;

class GetMaterialData
{

    /**
     * @var string
     */
    private $MaterialID;

    /**
     * @return string
     */
    public function getMaterialID()
    {
        return $this->MaterialID;
    }

    /**
     * @param string $MaterialID
     * @return GetMaterialData
     */
    public function withMaterialID($MaterialID)
    {
        $new = clone $this;
        $new->MaterialID = $MaterialID;

        return $new;
    }


}


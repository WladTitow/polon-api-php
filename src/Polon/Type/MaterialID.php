<?php

namespace Polon\Type;

class MaterialID
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

    public function __construct($MaterialID)
    {
        $this->MaterialID = $MaterialID;
    }

    /**
     * @param string $MaterialID
     * @return MaterialID
     */
    public function withMaterialID($MaterialID)
    {
        $new = clone $this;
        $new->MaterialID = $MaterialID;

        return $new;
    }


}


<?php

namespace Polon\Type;

class MaterialGroup
{

    /**
     * @var string
     */
    private $MaterialGroup;

    public function __construct($MaterialGroup)
    {
        $this->MaterialGroup = $MaterialGroup;
    }

    /**
     * @return string
     */
    public function getMaterialGroup()
    {
        return $this->MaterialGroup;
    }

    /**
     * @param string $MaterialGroup
     * @return MaterialGroup
     */
    public function withMaterialGroup($MaterialGroup)
    {
        $new = clone $this;
        $new->MaterialGroup = $MaterialGroup;

        return $new;
    }


}


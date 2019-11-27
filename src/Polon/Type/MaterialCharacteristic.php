<?php

namespace Polon\Type;

class MaterialCharacteristic
{

    /**
     * @var string
     */
    private $CharName;

    /**
     * @var string
     */
    private $CharValue;

    /**
     * @return string
     */
    public function getCharName()
    {
        return $this->CharName;
    }

    /**
     * @param string $CharName
     * @return MaterialCharacteristic
     */
    public function withCharName($CharName)
    {
        $new = clone $this;
        $new->CharName = $CharName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCharValue()
    {
        return $this->CharValue;
    }

    /**
     * @param string $CharValue
     * @return MaterialCharacteristic
     */
    public function withCharValue($CharValue)
    {
        $new = clone $this;
        $new->CharValue = $CharValue;

        return $new;
    }


}


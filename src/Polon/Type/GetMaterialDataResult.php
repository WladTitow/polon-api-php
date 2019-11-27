<?php

namespace Polon\Type;

class GetMaterialDataResult
{

    /**
     * @var string
     */
    private $MaterialText;

    /**
     * @var string
     */
    private $MaterialGroup;

    /**
     * @var string
     */
    private $UnitOfMeasurement;

    /**
     * @var \Polon\Type\MaterialCharacteristics
     */
    private $MaterialCharacteristics;

    /**
     * @var int
     */
    private $Result;

    /**
     * @var string
     */
    private $ErrorMessage;

    /**
     * @return string
     */
    public function getMaterialText()
    {
        return $this->MaterialText;
    }

    /**
     * @param string $MaterialText
     * @return GetMaterialDataResult
     */
    public function withMaterialText($MaterialText)
    {
        $new = clone $this;
        $new->MaterialText = $MaterialText;

        return $new;
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
     * @return GetMaterialDataResult
     */
    public function withMaterialGroup($MaterialGroup)
    {
        $new = clone $this;
        $new->MaterialGroup = $MaterialGroup;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasurement()
    {
        return $this->UnitOfMeasurement;
    }

    /**
     * @param string $UnitOfMeasurement
     * @return GetMaterialDataResult
     */
    public function withUnitOfMeasurement($UnitOfMeasurement)
    {
        $new = clone $this;
        $new->UnitOfMeasurement = $UnitOfMeasurement;

        return $new;
    }

    /**
     * @return \Polon\Type\MaterialCharacteristics
     */
    public function getMaterialCharacteristics()
    {
        return $this->MaterialCharacteristics;
    }

    /**
     * @param \Polon\Type\MaterialCharacteristics $MaterialCharacteristics
     * @return GetMaterialDataResult
     */
    public function withMaterialCharacteristics($MaterialCharacteristics)
    {
        $new = clone $this;
        $new->MaterialCharacteristics = $MaterialCharacteristics;

        return $new;
    }

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @param int $Result
     * @return GetMaterialDataResult
     */
    public function withResult($Result)
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return GetMaterialDataResult
     */
    public function withErrorMessage($ErrorMessage)
    {
        $new = clone $this;
        $new->ErrorMessage = $ErrorMessage;

        return $new;
    }


}


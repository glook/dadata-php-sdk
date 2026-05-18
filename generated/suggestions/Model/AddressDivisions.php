<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class AddressDivisions
{
    /**
     * @var AdministrativeDivision
     */
    protected $administrative;

    /**
     * @var MunicipalDivision
     */
    protected $municipal;

    public function getAdministrative(): AdministrativeDivision
    {
        return $this->administrative;
    }

    public function setAdministrative(AdministrativeDivision $administrative): self
    {
        $this->administrative = $administrative;

        return $this;
    }

    public function getMunicipal(): MunicipalDivision
    {
        return $this->municipal;
    }

    public function setMunicipal(MunicipalDivision $municipal): self
    {
        $this->municipal = $municipal;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Clear\Model;

class AdministrativeDivision
{
    /**
     * @var null|AddressPart
     */
    protected $area;

    /**
     * @var null|AddressPart
     */
    protected $city;

    /**
     * @var null|AddressPart
     */
    protected $cityDistrict;

    /**
     * @var null|AddressPart
     */
    protected $settlement;

    /**
     * @var null|AddressPart
     */
    protected $planningStructure;

    public function getArea(): ?AddressPart
    {
        return $this->area;
    }

    public function setArea(?AddressPart $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getCity(): ?AddressPart
    {
        return $this->city;
    }

    public function setCity(?AddressPart $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCityDistrict(): ?AddressPart
    {
        return $this->cityDistrict;
    }

    public function setCityDistrict(?AddressPart $cityDistrict): self
    {
        $this->cityDistrict = $cityDistrict;

        return $this;
    }

    public function getSettlement(): ?AddressPart
    {
        return $this->settlement;
    }

    public function setSettlement(?AddressPart $settlement): self
    {
        $this->settlement = $settlement;

        return $this;
    }

    public function getPlanningStructure(): ?AddressPart
    {
        return $this->planningStructure;
    }

    public function setPlanningStructure(?AddressPart $planningStructure): self
    {
        $this->planningStructure = $planningStructure;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class MunicipalDivision
{
    /**
     * @var AddressPart
     */
    protected $area;

    /**
     * @var AddressPart
     */
    protected $city;

    /**
     * @var AddressPart
     */
    protected $planningStructure;

    /**
     * @var AddressPart
     */
    protected $settlement;

    /**
     * @var AddressPart
     */
    protected $subArea;

    public function getArea(): AddressPart
    {
        return $this->area;
    }

    public function setArea(AddressPart $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getCity(): AddressPart
    {
        return $this->city;
    }

    public function setCity(AddressPart $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPlanningStructure(): AddressPart
    {
        return $this->planningStructure;
    }

    public function setPlanningStructure(AddressPart $planningStructure): self
    {
        $this->planningStructure = $planningStructure;

        return $this;
    }

    public function getSettlement(): AddressPart
    {
        return $this->settlement;
    }

    public function setSettlement(AddressPart $settlement): self
    {
        $this->settlement = $settlement;

        return $this;
    }

    public function getSubArea(): AddressPart
    {
        return $this->subArea;
    }

    public function setSubArea(AddressPart $subArea): self
    {
        $this->subArea = $subArea;

        return $this;
    }
}

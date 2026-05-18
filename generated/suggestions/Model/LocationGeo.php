<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class LocationGeo
{
    /**
     * @var null|float
     */
    protected $lat;

    /**
     * @var null|float
     */
    protected $lon;

    /**
     * @var null|float
     */
    protected $radiusMeters;

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(?float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getRadiusMeters(): ?float
    {
        return $this->radiusMeters;
    }

    public function setRadiusMeters(?float $radiusMeters): self
    {
        $this->radiusMeters = $radiusMeters;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class GeoLocateAddressRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

    /**
     * @var null|string
     */
    protected $division;

    /**
     * @var null|string
     */
    protected $language;

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

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(?string $division): self
    {
        $this->division = $division;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

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

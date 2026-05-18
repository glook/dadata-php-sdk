<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class GeoLocateOutwardRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

    /**
     * @var null|string[][]
     */
    protected $filters;

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

    /**
     * @return null|string[][]
     */
    public function getFilters(): ?array
    {
        return $this->filters;
    }

    /**
     * @param null|string[][] $filters
     */
    public function setFilters(?array $filters): self
    {
        $this->filters = $filters;

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

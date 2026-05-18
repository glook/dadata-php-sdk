<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestFiasRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

    /**
     * @var null|Bound
     */
    protected $fromBound;

    /**
     * @var null|LocationFias[]
     */
    protected $locations;

    /**
     * @var null|LocationCode[]
     */
    protected $locationsBoost;

    /**
     * @var string
     */
    protected $query;

    /**
     * @var null|bool
     */
    protected $restrictValue = false;

    /**
     * @var null|Bound
     */
    protected $toBound;

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(?int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getFromBound(): ?Bound
    {
        return $this->fromBound;
    }

    public function setFromBound(?Bound $fromBound): self
    {
        $this->fromBound = $fromBound;

        return $this;
    }

    /**
     * @return null|LocationFias[]
     */
    public function getLocations(): ?array
    {
        return $this->locations;
    }

    /**
     * @param null|LocationFias[] $locations
     */
    public function setLocations(?array $locations): self
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * @return null|LocationCode[]
     */
    public function getLocationsBoost(): ?array
    {
        return $this->locationsBoost;
    }

    /**
     * @param null|LocationCode[] $locationsBoost
     */
    public function setLocationsBoost(?array $locationsBoost): self
    {
        $this->locationsBoost = $locationsBoost;

        return $this;
    }

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getRestrictValue(): ?bool
    {
        return $this->restrictValue;
    }

    public function setRestrictValue(?bool $restrictValue): self
    {
        $this->restrictValue = $restrictValue;

        return $this;
    }

    public function getToBound(): ?Bound
    {
        return $this->toBound;
    }

    public function setToBound(?Bound $toBound): self
    {
        $this->toBound = $toBound;

        return $this;
    }
}

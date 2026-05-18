<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestAddressRequest
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
     * @var null|Bound
     */
    protected $fromBound;

    /**
     * @var null|string
     */
    protected $language;

    /**
     * @var null|LocationAddress[]
     */
    protected $locations;

    /**
     * @var null|LocationCode[]
     */
    protected $locationsBoost;

    /**
     * @var null|LocationGeo[]
     */
    protected $locationsGeo;

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

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(?string $division): self
    {
        $this->division = $division;

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

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return null|LocationAddress[]
     */
    public function getLocations(): ?array
    {
        return $this->locations;
    }

    /**
     * @param null|LocationAddress[] $locations
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

    /**
     * @return null|LocationGeo[]
     */
    public function getLocationsGeo(): ?array
    {
        return $this->locationsGeo;
    }

    /**
     * @param null|LocationGeo[] $locationsGeo
     */
    public function setLocationsGeo(?array $locationsGeo): self
    {
        $this->locationsGeo = $locationsGeo;

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

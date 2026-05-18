<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestBankRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

    /**
     * @var null|LocationCode[]
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
     * @var null|string[]
     */
    protected $status;

    /**
     * @var null|string[]
     */
    protected $type;

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
     * @return null|LocationCode[]
     */
    public function getLocations(): ?array
    {
        return $this->locations;
    }

    /**
     * @param null|LocationCode[] $locations
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

    /**
     * @return null|string[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }

    /**
     * @param null|string[] $status
     */
    public function setStatus(?array $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getType(): ?array
    {
        return $this->type;
    }

    /**
     * @param null|string[] $type
     */
    public function setType(?array $type): self
    {
        $this->type = $type;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FindAddressByIdRequest
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
     * @var string
     */
    protected $query;

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

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

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

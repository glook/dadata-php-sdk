<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestOutwardRequest
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
     * @var string
     */
    protected $query;

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

    public function getQuery(): string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }
}

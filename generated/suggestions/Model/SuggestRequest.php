<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

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

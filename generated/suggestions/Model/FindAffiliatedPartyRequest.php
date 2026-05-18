<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FindAffiliatedPartyRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

    /**
     * @var string
     */
    protected $query;

    /**
     * @var null|string[]
     */
    protected $scope;

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

    /**
     * @return null|string[]
     */
    public function getScope(): ?array
    {
        return $this->scope;
    }

    /**
     * @param null|string[] $scope
     */
    public function setScope(?array $scope): self
    {
        $this->scope = $scope;

        return $this;
    }
}

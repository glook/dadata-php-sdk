<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestFioRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

    /**
     * @var null|string
     */
    protected $gender = 'UNKNOWN';

    /**
     * @var null|string[]
     */
    protected $parts;

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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getParts(): ?array
    {
        return $this->parts;
    }

    /**
     * @param null|string[] $parts
     */
    public function setParts(?array $parts): self
    {
        $this->parts = $parts;

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

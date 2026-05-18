<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FindBankByIdRequest
{
    /**
     * @var null|int
     */
    protected $count = 10;

    /**
     * @var null|string
     */
    protected $kpp;

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

    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

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

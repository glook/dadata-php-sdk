<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FindPartyByIdRequest
{
    /**
     * @var null|string[]
     */
    protected $branchType;

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

    /**
     * @var null|string[]
     */
    protected $status;

    /**
     * @var null|string
     */
    protected $type;

    /**
     * @return null|string[]
     */
    public function getBranchType(): ?array
    {
        return $this->branchType;
    }

    /**
     * @param null|string[] $branchType
     */
    public function setBranchType(?array $branchType): self
    {
        $this->branchType = $branchType;

        return $this;
    }

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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}

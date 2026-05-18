<?php

namespace Glook\Dadata\Generated\Clear\Model;

class Vehicle
{
    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $result;

    /**
     * @var null|string
     */
    protected $brand;

    /**
     * @var null|string
     */
    protected $model;

    /**
     * @var null|int
     */
    protected $qc;

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getQc(): ?int
    {
        return $this->qc;
    }

    public function setQc(?int $qc): self
    {
        $this->qc = $qc;

        return $this;
    }
}

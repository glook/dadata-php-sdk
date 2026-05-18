<?php

namespace Glook\Dadata\Generated\Clear\Model;

class Metro
{
    /**
     * @var null|float
     */
    protected $distance;

    /**
     * @var null|string
     */
    protected $line;

    /**
     * @var null|string
     */
    protected $name;

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getLine(): ?string
    {
        return $this->line;
    }

    public function setLine(?string $line): self
    {
        $this->line = $line;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

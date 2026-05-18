<?php

namespace Glook\Dadata\Generated\Clear\Model;

class Passport
{
    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $series;

    /**
     * @var null|string
     */
    protected $number;

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

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

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

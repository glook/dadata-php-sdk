<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FractionFounderShare
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var null|int
     */
    protected $numerator;

    /**
     * @var null|int
     */
    protected $denominator;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNumerator(): ?int
    {
        return $this->numerator;
    }

    public function setNumerator(?int $numerator): self
    {
        $this->numerator = $numerator;

        return $this;
    }

    public function getDenominator(): ?int
    {
        return $this->denominator;
    }

    public function setDenominator(?int $denominator): self
    {
        $this->denominator = $denominator;

        return $this;
    }
}

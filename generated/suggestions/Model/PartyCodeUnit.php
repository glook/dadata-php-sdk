<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyCodeUnit
{
    /**
     * @var null|string
     */
    protected $alpha3;

    /**
     * @var null|string
     */
    protected $alpha32;

    /**
     * @var null|int
     */
    protected $numeric;

    public function getAlpha3(): ?string
    {
        return $this->alpha3;
    }

    public function setAlpha3(?string $alpha3): self
    {
        $this->alpha3 = $alpha3;

        return $this;
    }

    public function getAlpha32(): ?string
    {
        return $this->alpha32;
    }

    public function setAlpha32(?string $alpha32): self
    {
        $this->alpha32 = $alpha32;

        return $this;
    }

    public function getNumeric(): ?int
    {
        return $this->numeric;
    }

    public function setNumeric(?int $numeric): self
    {
        $this->numeric = $numeric;

        return $this;
    }
}

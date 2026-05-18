<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyCapital
{
    /**
     * @var null|string
     */
    protected $type;

    /**
     * @var null|float
     */
    protected $value;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }
}

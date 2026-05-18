<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyNameUnit
{
    /**
     * @var null|string
     */
    protected $fullValue;

    /**
     * @var null|string
     */
    protected $shortValue;

    public function getFullValue(): ?string
    {
        return $this->fullValue;
    }

    public function setFullValue(?string $fullValue): self
    {
        $this->fullValue = $fullValue;

        return $this;
    }

    public function getShortValue(): ?string
    {
        return $this->shortValue;
    }

    public function setShortValue(?string $shortValue): self
    {
        $this->shortValue = $shortValue;

        return $this;
    }
}

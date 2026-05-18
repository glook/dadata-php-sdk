<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyOpf
{
    /**
     * @var null|string
     */
    protected $code;

    /**
     * @var null|string
     */
    protected $fullValue;

    /**
     * @var null|string
     */
    protected $shortValue;

    /**
     * @var null|string
     */
    protected $type;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

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

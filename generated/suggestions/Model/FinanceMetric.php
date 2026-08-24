<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FinanceMetric
{
    /**
     * @var null|string
     */
    protected $code;

    /**
     * @var null|float
     */
    protected $value;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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

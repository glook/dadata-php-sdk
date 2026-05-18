<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class Bound
{
    /**
     * @var null|bool
     */
    protected $include = true;

    /**
     * @var string
     */
    protected $value;

    public function getInclude(): ?bool
    {
        return $this->include;
    }

    public function setInclude(?bool $include): self
    {
        $this->include = $include;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}

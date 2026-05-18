<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class SuggestionObject
{
    /**
     * @var null|mixed
     */
    protected $data;

    /**
     * @var null|string
     */
    protected $unrestrictedValue;

    /**
     * @var null|string
     */
    protected $value;

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getUnrestrictedValue(): ?string
    {
        return $this->unrestrictedValue;
    }

    public function setUnrestrictedValue(?string $unrestrictedValue): self
    {
        $this->unrestrictedValue = $unrestrictedValue;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}

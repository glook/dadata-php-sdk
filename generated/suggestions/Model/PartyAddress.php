<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyAddress
{
    /**
     * @var Address
     */
    protected $data;

    /**
     * @var PartyInvalidity
     */
    protected $invalidity;

    /**
     * @var null|string
     */
    protected $unrestrictedValue;

    /**
     * @var null|string
     */
    protected $value;

    public function getData(): Address
    {
        return $this->data;
    }

    public function setData(Address $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getInvalidity(): PartyInvalidity
    {
        return $this->invalidity;
    }

    public function setInvalidity(PartyInvalidity $invalidity): self
    {
        $this->invalidity = $invalidity;

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

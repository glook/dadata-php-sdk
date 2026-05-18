<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class ManagerParty
{
    /**
     * @var null|string
     */
    protected $hid;

    /**
     * @var PartyInvalidity
     */
    protected $invalidity;

    /**
     * @var null|int
     */
    protected $startDate;

    /**
     * @var null|string
     */
    protected $type;

    public function getHid(): ?string
    {
        return $this->hid;
    }

    public function setHid(?string $hid): self
    {
        $this->hid = $hid;

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

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->startDate = $startDate;

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

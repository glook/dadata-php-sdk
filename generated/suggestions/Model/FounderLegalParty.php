<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FounderLegalParty
{
    /**
     * @var null|string
     */
    protected $hid;

    /**
     * @var null|string
     */
    protected $inn;

    /**
     * @var PartyInvalidity
     */
    protected $invalidity;

    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $ogrn;

    /**
     * @var mixed
     */
    protected $share;

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

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    public function setOgrn(?string $ogrn): self
    {
        $this->ogrn = $ogrn;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getShare()
    {
        return $this->share;
    }

    /**
     * @param mixed $share
     */
    public function setShare($share): self
    {
        $this->share = $share;

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

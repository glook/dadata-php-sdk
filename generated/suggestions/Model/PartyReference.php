<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyReference
{
    /**
     * @var null|string
     */
    protected $inn;

    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $ogrn;

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

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
}

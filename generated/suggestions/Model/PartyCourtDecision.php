<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyCourtDecision
{
    /**
     * @var string
     */
    protected $courtName;

    /**
     * @var null|int
     */
    protected $date;

    /**
     * @var string
     */
    protected $number;

    public function getCourtName(): string
    {
        return $this->courtName;
    }

    public function setCourtName(string $courtName): self
    {
        $this->courtName = $courtName;

        return $this;
    }

    public function getDate(): ?int
    {
        return $this->date;
    }

    public function setDate(?int $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }
}

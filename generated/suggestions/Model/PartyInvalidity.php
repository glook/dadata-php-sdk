<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyInvalidity
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @var PartyCourtDecision
     */
    protected $decision;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDecision(): PartyCourtDecision
    {
        return $this->decision;
    }

    public function setDecision(PartyCourtDecision $decision): self
    {
        $this->decision = $decision;

        return $this;
    }
}

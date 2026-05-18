<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyCountry
{
    /**
     * @var PartyCodeUnit
     */
    protected $code;

    /**
     * @var PartyNameUnit
     */
    protected $name;

    public function getCode(): PartyCodeUnit
    {
        return $this->code;
    }

    public function setCode(PartyCodeUnit $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): PartyNameUnit
    {
        return $this->name;
    }

    public function setName(PartyNameUnit $name): self
    {
        $this->name = $name;

        return $this;
    }
}

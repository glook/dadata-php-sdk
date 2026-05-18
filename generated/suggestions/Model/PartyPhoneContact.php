<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyPhoneContact
{
    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $type;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

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

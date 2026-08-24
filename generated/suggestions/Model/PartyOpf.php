<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyOpf
{
    /**
     * @var null|string
     */
    protected $code;

    /**
     * @var null|string
     */
    protected $full;

    /**
     * @var null|string
     */
    protected $short;

    /**
     * @var null|string
     */
    protected $type;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getFull(): ?string
    {
        return $this->full;
    }

    public function setFull(?string $full): self
    {
        $this->full = $full;

        return $this;
    }

    public function getShort(): ?string
    {
        return $this->short;
    }

    public function setShort(?string $short): self
    {
        $this->short = $short;

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

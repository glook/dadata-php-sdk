<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class AddressPart
{
    /**
     * @var null|string
     */
    protected $fiasId;

    /**
     * @var null|string
     */
    protected $kladrId;

    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $nameWithType;

    /**
     * @var null|string
     */
    protected $type;

    /**
     * @var null|string
     */
    protected $typeFull;

    public function getFiasId(): ?string
    {
        return $this->fiasId;
    }

    public function setFiasId(?string $fiasId): self
    {
        $this->fiasId = $fiasId;

        return $this;
    }

    public function getKladrId(): ?string
    {
        return $this->kladrId;
    }

    public function setKladrId(?string $kladrId): self
    {
        $this->kladrId = $kladrId;

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

    public function getNameWithType(): ?string
    {
        return $this->nameWithType;
    }

    public function setNameWithType(?string $nameWithType): self
    {
        $this->nameWithType = $nameWithType;

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

    public function getTypeFull(): ?string
    {
        return $this->typeFull;
    }

    public function setTypeFull(?string $typeFull): self
    {
        $this->typeFull = $typeFull;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyName
{
    /**
     * @var null|string
     */
    protected $fullValue;

    /**
     * @var null|string
     */
    protected $fullWithOpf;

    /**
     * @var null|string
     */
    protected $latin;

    /**
     * @var null|string
     */
    protected $shortValue;

    /**
     * @var null|string
     */
    protected $shortWithOpf;

    public function getFullValue(): ?string
    {
        return $this->fullValue;
    }

    public function setFullValue(?string $fullValue): self
    {
        $this->fullValue = $fullValue;

        return $this;
    }

    public function getFullWithOpf(): ?string
    {
        return $this->fullWithOpf;
    }

    public function setFullWithOpf(?string $fullWithOpf): self
    {
        $this->fullWithOpf = $fullWithOpf;

        return $this;
    }

    public function getLatin(): ?string
    {
        return $this->latin;
    }

    public function setLatin(?string $latin): self
    {
        $this->latin = $latin;

        return $this;
    }

    public function getShortValue(): ?string
    {
        return $this->shortValue;
    }

    public function setShortValue(?string $shortValue): self
    {
        $this->shortValue = $shortValue;

        return $this;
    }

    public function getShortWithOpf(): ?string
    {
        return $this->shortWithOpf;
    }

    public function setShortWithOpf(?string $shortWithOpf): self
    {
        $this->shortWithOpf = $shortWithOpf;

        return $this;
    }
}

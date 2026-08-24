<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyName
{
    /**
     * @var null|string
     */
    protected $full;

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
    protected $short;

    /**
     * @var null|string
     */
    protected $shortWithOpf;

    public function getFull(): ?string
    {
        return $this->full;
    }

    public function setFull(?string $full): self
    {
        $this->full = $full;

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

    public function getShort(): ?string
    {
        return $this->short;
    }

    public function setShort(?string $short): self
    {
        $this->short = $short;

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

<?php

namespace Glook\Dadata\Generated\Clear\Model;

class Birthdate
{
    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $birthdate;

    /**
     * @var null|int
     */
    protected $qc;

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    public function setBirthdate(?string $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getQc(): ?int
    {
        return $this->qc;
    }

    public function setQc(?int $qc): self
    {
        $this->qc = $qc;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class Email
{
    /**
     * @var null|string
     */
    protected $domain;

    /**
     * @var null|string
     */
    protected $local;

    /**
     * @var null|string
     */
    protected $qc;

    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $type;

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getLocal(): ?string
    {
        return $this->local;
    }

    public function setLocal(?string $local): self
    {
        $this->local = $local;

        return $this;
    }

    public function getQc(): ?string
    {
        return $this->qc;
    }

    public function setQc(?string $qc): self
    {
        $this->qc = $qc;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

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

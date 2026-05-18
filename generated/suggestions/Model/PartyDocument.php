<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyDocument
{
    /**
     * @var null|string
     */
    protected $issueAuthority;

    /**
     * @var null|int
     */
    protected $issueDate;

    /**
     * @var null|string
     */
    protected $number;

    /**
     * @var null|string
     */
    protected $series;

    /**
     * @var string
     */
    protected $type;

    public function getIssueAuthority(): ?string
    {
        return $this->issueAuthority;
    }

    public function setIssueAuthority(?string $issueAuthority): self
    {
        $this->issueAuthority = $issueAuthority;

        return $this;
    }

    public function getIssueDate(): ?int
    {
        return $this->issueDate;
    }

    public function setIssueDate(?int $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}

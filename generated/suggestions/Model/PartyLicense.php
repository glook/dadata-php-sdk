<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyLicense
{
    /**
     * @var null|string[]
     */
    protected $activities;

    /**
     * @var null|string[]
     */
    protected $addresses;

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
     * @var null|string
     */
    protected $suspendAuthority;

    /**
     * @var null|int
     */
    protected $suspendDate;

    /**
     * @var null|int
     */
    protected $validFrom;

    /**
     * @var null|int
     */
    protected $validTo;

    /**
     * @return null|string[]
     */
    public function getActivities(): ?array
    {
        return $this->activities;
    }

    /**
     * @param null|string[] $activities
     */
    public function setActivities(?array $activities): self
    {
        $this->activities = $activities;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    /**
     * @param null|string[] $addresses
     */
    public function setAddresses(?array $addresses): self
    {
        $this->addresses = $addresses;

        return $this;
    }

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

    public function getSuspendAuthority(): ?string
    {
        return $this->suspendAuthority;
    }

    public function setSuspendAuthority(?string $suspendAuthority): self
    {
        $this->suspendAuthority = $suspendAuthority;

        return $this;
    }

    public function getSuspendDate(): ?int
    {
        return $this->suspendDate;
    }

    public function setSuspendDate(?int $suspendDate): self
    {
        $this->suspendDate = $suspendDate;

        return $this;
    }

    public function getValidFrom(): ?int
    {
        return $this->validFrom;
    }

    public function setValidFrom(?int $validFrom): self
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    public function getValidTo(): ?int
    {
        return $this->validTo;
    }

    public function setValidTo(?int $validTo): self
    {
        $this->validTo = $validTo;

        return $this;
    }
}

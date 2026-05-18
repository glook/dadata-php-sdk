<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class Company
{
    /**
     * @var null|string
     */
    protected $city;

    /**
     * @var null|string
     */
    protected $domain;

    /**
     * @var null|int
     */
    protected $employeeCount;

    /**
     * @var null|float
     */
    protected $income;

    /**
     * @var null|string
     */
    protected $inn;

    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $ogrn;

    /**
     * @var null|string
     */
    protected $okved;

    /**
     * @var null|string
     */
    protected $okvedName;

    /**
     * @var null|string
     */
    protected $timezone;

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    public function getEmployeeCount(): ?int
    {
        return $this->employeeCount;
    }

    public function setEmployeeCount(?int $employeeCount): self
    {
        $this->employeeCount = $employeeCount;

        return $this;
    }

    public function getIncome(): ?float
    {
        return $this->income;
    }

    public function setIncome(?float $income): self
    {
        $this->income = $income;

        return $this;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

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

    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    public function setOgrn(?string $ogrn): self
    {
        $this->ogrn = $ogrn;

        return $this;
    }

    public function getOkved(): ?string
    {
        return $this->okved;
    }

    public function setOkved(?string $okved): self
    {
        $this->okved = $okved;

        return $this;
    }

    public function getOkvedName(): ?string
    {
        return $this->okvedName;
    }

    public function setOkvedName(?string $okvedName): self
    {
        $this->okvedName = $okvedName;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }
}

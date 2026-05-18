<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class Phone
{
    /**
     * @var null|string
     */
    protected $city;

    /**
     * @var null|string
     */
    protected $cityCode;

    /**
     * @var null|string
     */
    protected $country;

    /**
     * @var null|string
     */
    protected $countryCode;

    /**
     * @var null|string
     */
    protected $extension;

    /**
     * @var null|string
     */
    protected $number;

    /**
     * @var null|string
     */
    protected $provider;

    /**
     * @var null|string
     */
    protected $qc;

    /**
     * @var null|string
     */
    protected $qcConflict;

    /**
     * @var null|string
     */
    protected $region;

    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $timezone;

    /**
     * @var null|string
     */
    protected $type;

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    public function setCityCode(?string $cityCode): self
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

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

    public function getProvider(): ?string
    {
        return $this->provider;
    }

    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;

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

    public function getQcConflict(): ?string
    {
        return $this->qcConflict;
    }

    public function setQcConflict(?string $qcConflict): self
    {
        $this->qcConflict = $qcConflict;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

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

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

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

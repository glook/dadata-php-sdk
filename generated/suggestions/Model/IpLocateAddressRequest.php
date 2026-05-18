<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class IpLocateAddressRequest
{
    /**
     * @var null|string
     */
    protected $division;

    /**
     * @var null|string
     */
    protected $ip;

    /**
     * @var null|string
     */
    protected $language;

    public function getDivision(): ?string
    {
        return $this->division;
    }

    public function setDivision(?string $division): self
    {
        $this->division = $division;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }
}

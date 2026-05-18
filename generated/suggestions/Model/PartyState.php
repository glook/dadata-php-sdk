<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyState
{
    /**
     * @var null|int
     */
    protected $actualityDate;

    /**
     * @var null|string
     */
    protected $code;

    /**
     * @var null|int
     */
    protected $liquidationDate;

    /**
     * @var null|int
     */
    protected $registrationDate;

    /**
     * @var string
     */
    protected $status;

    public function getActualityDate(): ?int
    {
        return $this->actualityDate;
    }

    public function setActualityDate(?int $actualityDate): self
    {
        $this->actualityDate = $actualityDate;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLiquidationDate(): ?int
    {
        return $this->liquidationDate;
    }

    public function setLiquidationDate(?int $liquidationDate): self
    {
        $this->liquidationDate = $liquidationDate;

        return $this;
    }

    public function getRegistrationDate(): ?int
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(?int $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}

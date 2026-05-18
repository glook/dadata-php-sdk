<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class BankName
{
    /**
     * @var null|string
     */
    protected $fullValue;

    /**
     * @var null|string
     */
    protected $payment;

    /**
     * @var null|string
     */
    protected $shortValue;

    public function getFullValue(): ?string
    {
        return $this->fullValue;
    }

    public function setFullValue(?string $fullValue): self
    {
        $this->fullValue = $fullValue;

        return $this;
    }

    public function getPayment(): ?string
    {
        return $this->payment;
    }

    public function setPayment(?string $payment): self
    {
        $this->payment = $payment;

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
}

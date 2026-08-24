<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class BankName
{
    /**
     * @var null|string
     */
    protected $full;

    /**
     * @var null|string
     */
    protected $payment;

    /**
     * @var null|string
     */
    protected $short;

    public function getFull(): ?string
    {
        return $this->full;
    }

    public function setFull(?string $full): self
    {
        $this->full = $full;

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

    public function getShort(): ?string
    {
        return $this->short;
    }

    public function setShort(?string $short): self
    {
        $this->short = $short;

        return $this;
    }
}

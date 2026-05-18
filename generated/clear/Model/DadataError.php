<?php

namespace Glook\Dadata\Generated\Clear\Model;

class DadataError
{
    /**
     * @var null|string
     */
    protected $family;

    /**
     * @var null|string
     */
    protected $reason;

    /**
     * @var null|string
     */
    protected $message;

    public function getFamily(): ?string
    {
        return $this->family;
    }

    public function setFamily(?string $family): self
    {
        $this->family = $family;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}

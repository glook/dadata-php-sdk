<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyManagement
{
    /**
     * @var null|bool
     */
    protected $disqualified;

    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $post;

    /**
     * @var null|int
     */
    protected $startDate;

    public function getDisqualified(): ?bool
    {
        return $this->disqualified;
    }

    public function setDisqualified(?bool $disqualified): self
    {
        $this->disqualified = $disqualified;

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

    public function getPost(): ?string
    {
        return $this->post;
    }

    public function setPost(?string $post): self
    {
        $this->post = $post;

        return $this;
    }

    public function getStartDate(): ?int
    {
        return $this->startDate;
    }

    public function setStartDate(?int $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }
}

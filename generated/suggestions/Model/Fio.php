<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class Fio
{
    /**
     * @var null|string
     */
    protected $gender;

    /**
     * @var null|string
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $patronymic;

    /**
     * @var null|string
     */
    protected $qc;

    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $surname;

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

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

    public function getPatronymic(): ?string
    {
        return $this->patronymic;
    }

    public function setPatronymic(?string $patronymic): self
    {
        $this->patronymic = $patronymic;

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

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }
}

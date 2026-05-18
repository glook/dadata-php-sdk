<?php

namespace Glook\Dadata\Generated\Clear\Model;

class Name
{
    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $result;

    /**
     * @var null|string
     */
    protected $resultGenitive;

    /**
     * @var null|string
     */
    protected $resultDative;

    /**
     * @var null|string
     */
    protected $resultAblative;

    /**
     * @var null|string
     */
    protected $surname;

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
    protected $gender;

    /**
     * @var null|int
     */
    protected $qc;

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getResultGenitive(): ?string
    {
        return $this->resultGenitive;
    }

    public function setResultGenitive(?string $resultGenitive): self
    {
        $this->resultGenitive = $resultGenitive;

        return $this;
    }

    public function getResultDative(): ?string
    {
        return $this->resultDative;
    }

    public function setResultDative(?string $resultDative): self
    {
        $this->resultDative = $resultDative;

        return $this;
    }

    public function getResultAblative(): ?string
    {
        return $this->resultAblative;
    }

    public function setResultAblative(?string $resultAblative): self
    {
        $this->resultAblative = $resultAblative;

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

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getQc(): ?int
    {
        return $this->qc;
    }

    public function setQc(?int $qc): self
    {
        $this->qc = $qc;

        return $this;
    }
}

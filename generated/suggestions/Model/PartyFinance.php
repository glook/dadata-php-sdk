<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyFinance
{
    /**
     * @var null|float
     */
    protected $debt;

    /**
     * @var null|float
     */
    protected $expense;

    /**
     * @var null|float
     */
    protected $income;

    /**
     * @var null|float
     */
    protected $penalty;

    /**
     * @var null|float
     */
    protected $revenue;

    /**
     * @var null|string
     */
    protected $taxSystem;

    /**
     * @var null|int
     */
    protected $year;

    public function getDebt(): ?float
    {
        return $this->debt;
    }

    public function setDebt(?float $debt): self
    {
        $this->debt = $debt;

        return $this;
    }

    public function getExpense(): ?float
    {
        return $this->expense;
    }

    public function setExpense(?float $expense): self
    {
        $this->expense = $expense;

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

    public function getPenalty(): ?float
    {
        return $this->penalty;
    }

    public function setPenalty(?float $penalty): self
    {
        $this->penalty = $penalty;

        return $this;
    }

    public function getRevenue(): ?float
    {
        return $this->revenue;
    }

    public function setRevenue(?float $revenue): self
    {
        $this->revenue = $revenue;

        return $this;
    }

    public function getTaxSystem(): ?string
    {
        return $this->taxSystem;
    }

    public function setTaxSystem(?string $taxSystem): self
    {
        $this->taxSystem = $taxSystem;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }
}

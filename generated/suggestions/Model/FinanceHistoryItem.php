<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class FinanceHistoryItem
{
    /**
     * @var null|int
     */
    protected $year;

    /**
     * @var null|FinanceMetric[]
     */
    protected $metrics;

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @return null|FinanceMetric[]
     */
    public function getMetrics(): ?array
    {
        return $this->metrics;
    }

    /**
     * @param null|FinanceMetric[] $metrics
     */
    public function setMetrics(?array $metrics): self
    {
        $this->metrics = $metrics;

        return $this;
    }
}

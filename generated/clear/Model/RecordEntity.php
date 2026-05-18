<?php

namespace Glook\Dadata\Generated\Clear\Model;

class RecordEntity
{
    /**
     * @var null|string[]
     */
    protected $structure;

    /**
     * @var null|mixed[][]
     */
    protected $data;

    /**
     * @return null|string[]
     */
    public function getStructure(): ?array
    {
        return $this->structure;
    }

    /**
     * @param null|string[] $structure
     */
    public function setStructure(?array $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * @return null|mixed[][]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * @param null|mixed[][] $data
     */
    public function setData(?array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

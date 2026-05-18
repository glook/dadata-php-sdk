<?php

namespace Glook\Dadata\Generated\Clear\Model;

class RecordString
{
    /**
     * @var string[]
     */
    protected $structure;

    /**
     * @var string[][]
     */
    protected $data;

    /**
     * @return string[]
     */
    public function getStructure(): array
    {
        return $this->structure;
    }

    /**
     * @param string[] $structure
     */
    public function setStructure(array $structure): self
    {
        $this->structure = $structure;

        return $this;
    }

    /**
     * @return string[][]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param string[][] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

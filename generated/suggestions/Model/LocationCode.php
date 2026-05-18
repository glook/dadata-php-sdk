<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class LocationCode
{
    /**
     * @var null|string
     */
    protected $kladrId;

    public function getKladrId(): ?string
    {
        return $this->kladrId;
    }

    public function setKladrId(?string $kladrId): self
    {
        $this->kladrId = $kladrId;

        return $this;
    }
}

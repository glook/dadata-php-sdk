<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class DeliveryData
{
    /**
     * @var null|string
     */
    protected $kladrId;

    /**
     * @var null|string
     */
    protected $fiasId;

    /**
     * @var null|string
     */
    protected $boxberryId;

    /**
     * @var null|string
     */
    protected $cdekId;

    /**
     * @var null|string
     */
    protected $dpdId;

    public function getKladrId(): ?string
    {
        return $this->kladrId;
    }

    public function setKladrId(?string $kladrId): self
    {
        $this->kladrId = $kladrId;

        return $this;
    }

    public function getFiasId(): ?string
    {
        return $this->fiasId;
    }

    public function setFiasId(?string $fiasId): self
    {
        $this->fiasId = $fiasId;

        return $this;
    }

    public function getBoxberryId(): ?string
    {
        return $this->boxberryId;
    }

    public function setBoxberryId(?string $boxberryId): self
    {
        $this->boxberryId = $boxberryId;

        return $this;
    }

    public function getCdekId(): ?string
    {
        return $this->cdekId;
    }

    public function setCdekId(?string $cdekId): self
    {
        $this->cdekId = $cdekId;

        return $this;
    }

    public function getDpdId(): ?string
    {
        return $this->dpdId;
    }

    public function setDpdId(?string $dpdId): self
    {
        $this->dpdId = $dpdId;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyDocuments
{
    /**
     * @var null|PartyDocument
     */
    protected $ftsRegistration;

    /**
     * @var PartyDocument
     */
    protected $ftsReport;

    /**
     * @var null|PartyDocument
     */
    protected $pfRegistration;

    /**
     * @var null|PartyDocument
     */
    protected $sifRegistration;

    /**
     * @var null|PartySmbDocument
     */
    protected $smb;

    public function getFtsRegistration(): ?PartyDocument
    {
        return $this->ftsRegistration;
    }

    public function setFtsRegistration(?PartyDocument $ftsRegistration): self
    {
        $this->ftsRegistration = $ftsRegistration;

        return $this;
    }

    public function getFtsReport(): PartyDocument
    {
        return $this->ftsReport;
    }

    public function setFtsReport(PartyDocument $ftsReport): self
    {
        $this->ftsReport = $ftsReport;

        return $this;
    }

    public function getPfRegistration(): ?PartyDocument
    {
        return $this->pfRegistration;
    }

    public function setPfRegistration(?PartyDocument $pfRegistration): self
    {
        $this->pfRegistration = $pfRegistration;

        return $this;
    }

    public function getSifRegistration(): ?PartyDocument
    {
        return $this->sifRegistration;
    }

    public function setSifRegistration(?PartyDocument $sifRegistration): self
    {
        $this->sifRegistration = $sifRegistration;

        return $this;
    }

    public function getSmb(): ?PartySmbDocument
    {
        return $this->smb;
    }

    public function setSmb(?PartySmbDocument $smb): self
    {
        $this->smb = $smb;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class PartyAuthorities
{
    /**
     * @var PartyAuthority
     */
    protected $ftsRegistration;

    /**
     * @var PartyAuthority
     */
    protected $ftsReport;

    /**
     * @var PartyAuthority
     */
    protected $pf;

    /**
     * @var PartyAuthority
     */
    protected $sif;

    public function getFtsRegistration(): PartyAuthority
    {
        return $this->ftsRegistration;
    }

    public function setFtsRegistration(PartyAuthority $ftsRegistration): self
    {
        $this->ftsRegistration = $ftsRegistration;

        return $this;
    }

    public function getFtsReport(): PartyAuthority
    {
        return $this->ftsReport;
    }

    public function setFtsReport(PartyAuthority $ftsReport): self
    {
        $this->ftsReport = $ftsReport;

        return $this;
    }

    public function getPf(): PartyAuthority
    {
        return $this->pf;
    }

    public function setPf(PartyAuthority $pf): self
    {
        $this->pf = $pf;

        return $this;
    }

    public function getSif(): PartyAuthority
    {
        return $this->sif;
    }

    public function setSif(PartyAuthority $sif): self
    {
        $this->sif = $sif;

        return $this;
    }
}

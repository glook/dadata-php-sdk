<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class BankParty
{
    /**
     * @var null|mixed[]
     */
    protected $additionalCodes;

    /**
     * @var SuggestionAddress
     */
    protected $address;

    /**
     * @var null|string
     */
    protected $bic;

    /**
     * @var null|BankParty
     */
    protected $cbr;

    /**
     * @var null|string
     */
    protected $correspondentAccount;

    /**
     * @var null|string
     */
    protected $inn;

    /**
     * @var null|string
     */
    protected $kpp;

    /**
     * @var BankName
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $okpo;

    /**
     * @var BankOpf
     */
    protected $opf;

    /**
     * @var null|string
     */
    protected $paymentCity;

    /**
     * @var null|SuggestionPhone[]
     */
    protected $phones;

    /**
     * @var null|string
     */
    protected $registrationNumber;

    /**
     * @var null|BankParty
     */
    protected $rkc;

    /**
     * @var BankState
     */
    protected $state;

    /**
     * @var null|string
     */
    protected $swift;

    /**
     * @var null|string[]
     */
    protected $swifts;

    /**
     * @var null|string[]
     */
    protected $treasuryAccounts;

    /**
     * @return null|mixed[]
     */
    public function getAdditionalCodes(): ?array
    {
        return $this->additionalCodes;
    }

    /**
     * @param null|mixed[] $additionalCodes
     */
    public function setAdditionalCodes(?array $additionalCodes): self
    {
        $this->additionalCodes = $additionalCodes;

        return $this;
    }

    public function getAddress(): SuggestionAddress
    {
        return $this->address;
    }

    public function setAddress(SuggestionAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(?string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getCbr(): ?BankParty
    {
        return $this->cbr;
    }

    public function setCbr(?BankParty $cbr): self
    {
        $this->cbr = $cbr;

        return $this;
    }

    public function getCorrespondentAccount(): ?string
    {
        return $this->correspondentAccount;
    }

    public function setCorrespondentAccount(?string $correspondentAccount): self
    {
        $this->correspondentAccount = $correspondentAccount;

        return $this;
    }

    public function getInn(): ?string
    {
        return $this->inn;
    }

    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    public function getKpp(): ?string
    {
        return $this->kpp;
    }

    public function setKpp(?string $kpp): self
    {
        $this->kpp = $kpp;

        return $this;
    }

    public function getName(): BankName
    {
        return $this->name;
    }

    public function setName(BankName $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOkpo(): ?string
    {
        return $this->okpo;
    }

    public function setOkpo(?string $okpo): self
    {
        $this->okpo = $okpo;

        return $this;
    }

    public function getOpf(): BankOpf
    {
        return $this->opf;
    }

    public function setOpf(BankOpf $opf): self
    {
        $this->opf = $opf;

        return $this;
    }

    public function getPaymentCity(): ?string
    {
        return $this->paymentCity;
    }

    public function setPaymentCity(?string $paymentCity): self
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    /**
     * @return null|SuggestionPhone[]
     */
    public function getPhones(): ?array
    {
        return $this->phones;
    }

    /**
     * @param null|SuggestionPhone[] $phones
     */
    public function setPhones(?array $phones): self
    {
        $this->phones = $phones;

        return $this;
    }

    public function getRegistrationNumber(): ?string
    {
        return $this->registrationNumber;
    }

    public function setRegistrationNumber(?string $registrationNumber): self
    {
        $this->registrationNumber = $registrationNumber;

        return $this;
    }

    public function getRkc(): ?BankParty
    {
        return $this->rkc;
    }

    public function setRkc(?BankParty $rkc): self
    {
        $this->rkc = $rkc;

        return $this;
    }

    public function getState(): BankState
    {
        return $this->state;
    }

    public function setState(BankState $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getSwift(): ?string
    {
        return $this->swift;
    }

    public function setSwift(?string $swift): self
    {
        $this->swift = $swift;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getSwifts(): ?array
    {
        return $this->swifts;
    }

    /**
     * @param null|string[] $swifts
     */
    public function setSwifts(?array $swifts): self
    {
        $this->swifts = $swifts;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getTreasuryAccounts(): ?array
    {
        return $this->treasuryAccounts;
    }

    /**
     * @param null|string[] $treasuryAccounts
     */
    public function setTreasuryAccounts(?array $treasuryAccounts): self
    {
        $this->treasuryAccounts = $treasuryAccounts;

        return $this;
    }
}

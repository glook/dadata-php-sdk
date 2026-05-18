<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class Party
{
    /**
     * @var PartyAddress
     */
    protected $address;

    /**
     * @var PartyAuthorities
     */
    protected $authorities;

    /**
     * @var null|int
     */
    protected $branchCount;

    /**
     * @var null|string
     */
    protected $branchType;

    /**
     * @var PartyCapital
     */
    protected $capital;

    /**
     * @var PartyCountry
     */
    protected $citizenship;

    /**
     * @var PartyDocuments
     */
    protected $documents;

    /**
     * @var null|SuggestionEmail[]
     */
    protected $emails;

    /**
     * @var null|int
     */
    protected $employeeCount;

    /**
     * @var PartyFinance
     */
    protected $finance;

    /**
     * @var Fio
     */
    protected $fio;

    /**
     * @var null|FounderParty[]
     */
    protected $founders;

    /**
     * @var null|string
     */
    protected $hid;

    /**
     * @var null|string
     */
    protected $inn;

    /**
     * @var null|bool
     */
    protected $invalid;

    /**
     * @var null|string
     */
    protected $kpp;

    /**
     * @var null|string
     */
    protected $kppLargest;

    /**
     * @var null|PartyLicense[]
     */
    protected $licenses;

    /**
     * @var PartyManagement
     */
    protected $management;

    /**
     * @var null|ManagerParty[]
     */
    protected $managers;

    /**
     * @var PartyName
     */
    protected $name;

    /**
     * @var null|string
     */
    protected $ogrn;

    /**
     * @var null|int
     */
    protected $ogrnDate;

    /**
     * @var null|string
     */
    protected $okato;

    /**
     * @var null|string
     */
    protected $okfs;

    /**
     * @var null|string
     */
    protected $okogu;

    /**
     * @var null|string
     */
    protected $okpo;

    /**
     * @var null|string
     */
    protected $oktmo;

    /**
     * @var null|string
     */
    protected $okved;

    /**
     * @var null|string
     */
    protected $okvedType;

    /**
     * @var null|PartyOkved[]
     */
    protected $okveds;

    /**
     * @var PartyOpf
     */
    protected $opf;

    /**
     * @var null|SuggestionPartyPhone[]
     */
    protected $phones;

    /**
     * @var null|PartyReference[]
     */
    protected $predecessors;

    /**
     * @var null|string
     */
    protected $qc;

    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var PartyState
     */
    protected $state;

    /**
     * @var null|PartyReference[]
     */
    protected $successors;

    /**
     * @var string
     */
    protected $type;

    public function getAddress(): PartyAddress
    {
        return $this->address;
    }

    public function setAddress(PartyAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getAuthorities(): PartyAuthorities
    {
        return $this->authorities;
    }

    public function setAuthorities(PartyAuthorities $authorities): self
    {
        $this->authorities = $authorities;

        return $this;
    }

    public function getBranchCount(): ?int
    {
        return $this->branchCount;
    }

    public function setBranchCount(?int $branchCount): self
    {
        $this->branchCount = $branchCount;

        return $this;
    }

    public function getBranchType(): ?string
    {
        return $this->branchType;
    }

    public function setBranchType(?string $branchType): self
    {
        $this->branchType = $branchType;

        return $this;
    }

    public function getCapital(): PartyCapital
    {
        return $this->capital;
    }

    public function setCapital(PartyCapital $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getCitizenship(): PartyCountry
    {
        return $this->citizenship;
    }

    public function setCitizenship(PartyCountry $citizenship): self
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    public function getDocuments(): PartyDocuments
    {
        return $this->documents;
    }

    public function setDocuments(PartyDocuments $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    /**
     * @return null|SuggestionEmail[]
     */
    public function getEmails(): ?array
    {
        return $this->emails;
    }

    /**
     * @param null|SuggestionEmail[] $emails
     */
    public function setEmails(?array $emails): self
    {
        $this->emails = $emails;

        return $this;
    }

    public function getEmployeeCount(): ?int
    {
        return $this->employeeCount;
    }

    public function setEmployeeCount(?int $employeeCount): self
    {
        $this->employeeCount = $employeeCount;

        return $this;
    }

    public function getFinance(): PartyFinance
    {
        return $this->finance;
    }

    public function setFinance(PartyFinance $finance): self
    {
        $this->finance = $finance;

        return $this;
    }

    public function getFio(): Fio
    {
        return $this->fio;
    }

    public function setFio(Fio $fio): self
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * @return null|FounderParty[]
     */
    public function getFounders(): ?array
    {
        return $this->founders;
    }

    /**
     * @param null|FounderParty[] $founders
     */
    public function setFounders(?array $founders): self
    {
        $this->founders = $founders;

        return $this;
    }

    public function getHid(): ?string
    {
        return $this->hid;
    }

    public function setHid(?string $hid): self
    {
        $this->hid = $hid;

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

    public function getInvalid(): ?bool
    {
        return $this->invalid;
    }

    public function setInvalid(?bool $invalid): self
    {
        $this->invalid = $invalid;

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

    public function getKppLargest(): ?string
    {
        return $this->kppLargest;
    }

    public function setKppLargest(?string $kppLargest): self
    {
        $this->kppLargest = $kppLargest;

        return $this;
    }

    /**
     * @return null|PartyLicense[]
     */
    public function getLicenses(): ?array
    {
        return $this->licenses;
    }

    /**
     * @param null|PartyLicense[] $licenses
     */
    public function setLicenses(?array $licenses): self
    {
        $this->licenses = $licenses;

        return $this;
    }

    public function getManagement(): PartyManagement
    {
        return $this->management;
    }

    public function setManagement(PartyManagement $management): self
    {
        $this->management = $management;

        return $this;
    }

    /**
     * @return null|ManagerParty[]
     */
    public function getManagers(): ?array
    {
        return $this->managers;
    }

    /**
     * @param null|ManagerParty[] $managers
     */
    public function setManagers(?array $managers): self
    {
        $this->managers = $managers;

        return $this;
    }

    public function getName(): PartyName
    {
        return $this->name;
    }

    public function setName(PartyName $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getOgrn(): ?string
    {
        return $this->ogrn;
    }

    public function setOgrn(?string $ogrn): self
    {
        $this->ogrn = $ogrn;

        return $this;
    }

    public function getOgrnDate(): ?int
    {
        return $this->ogrnDate;
    }

    public function setOgrnDate(?int $ogrnDate): self
    {
        $this->ogrnDate = $ogrnDate;

        return $this;
    }

    public function getOkato(): ?string
    {
        return $this->okato;
    }

    public function setOkato(?string $okato): self
    {
        $this->okato = $okato;

        return $this;
    }

    public function getOkfs(): ?string
    {
        return $this->okfs;
    }

    public function setOkfs(?string $okfs): self
    {
        $this->okfs = $okfs;

        return $this;
    }

    public function getOkogu(): ?string
    {
        return $this->okogu;
    }

    public function setOkogu(?string $okogu): self
    {
        $this->okogu = $okogu;

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

    public function getOktmo(): ?string
    {
        return $this->oktmo;
    }

    public function setOktmo(?string $oktmo): self
    {
        $this->oktmo = $oktmo;

        return $this;
    }

    public function getOkved(): ?string
    {
        return $this->okved;
    }

    public function setOkved(?string $okved): self
    {
        $this->okved = $okved;

        return $this;
    }

    public function getOkvedType(): ?string
    {
        return $this->okvedType;
    }

    public function setOkvedType(?string $okvedType): self
    {
        $this->okvedType = $okvedType;

        return $this;
    }

    /**
     * @return null|PartyOkved[]
     */
    public function getOkveds(): ?array
    {
        return $this->okveds;
    }

    /**
     * @param null|PartyOkved[] $okveds
     */
    public function setOkveds(?array $okveds): self
    {
        $this->okveds = $okveds;

        return $this;
    }

    public function getOpf(): PartyOpf
    {
        return $this->opf;
    }

    public function setOpf(PartyOpf $opf): self
    {
        $this->opf = $opf;

        return $this;
    }

    /**
     * @return null|SuggestionPartyPhone[]
     */
    public function getPhones(): ?array
    {
        return $this->phones;
    }

    /**
     * @param null|SuggestionPartyPhone[] $phones
     */
    public function setPhones(?array $phones): self
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * @return null|PartyReference[]
     */
    public function getPredecessors(): ?array
    {
        return $this->predecessors;
    }

    /**
     * @param null|PartyReference[] $predecessors
     */
    public function setPredecessors(?array $predecessors): self
    {
        $this->predecessors = $predecessors;

        return $this;
    }

    public function getQc(): ?string
    {
        return $this->qc;
    }

    public function setQc(?string $qc): self
    {
        $this->qc = $qc;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getState(): PartyState
    {
        return $this->state;
    }

    public function setState(PartyState $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return null|PartyReference[]
     */
    public function getSuccessors(): ?array
    {
        return $this->successors;
    }

    /**
     * @param null|PartyReference[] $successors
     */
    public function setSuccessors(?array $successors): self
    {
        $this->successors = $successors;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}

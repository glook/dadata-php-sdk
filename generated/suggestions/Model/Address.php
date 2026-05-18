<?php

namespace Glook\Dadata\Generated\Suggestions\Model;

class Address
{
    /**
     * @var null|string
     */
    protected $area;

    /**
     * @var null|string
     */
    protected $areaFiasId;

    /**
     * @var null|string
     */
    protected $areaKladrId;

    /**
     * @var null|string
     */
    protected $areaType;

    /**
     * @var null|string
     */
    protected $areaTypeFull;

    /**
     * @var null|string
     */
    protected $areaWithType;

    /**
     * @var null|string
     */
    protected $beltwayDistance;

    /**
     * @var null|string
     */
    protected $beltwayHit;

    /**
     * @var null|string
     */
    protected $block;

    /**
     * @var null|string
     */
    protected $blockType;

    /**
     * @var null|string
     */
    protected $blockTypeFull;

    /**
     * @var null|string
     */
    protected $capitalMarker;

    /**
     * @var null|string
     */
    protected $city;

    /**
     * @var null|string
     */
    protected $cityArea;

    /**
     * @var null|string
     */
    protected $cityDistrict;

    /**
     * @var null|string
     */
    protected $cityDistrictFiasId;

    /**
     * @var null|string
     */
    protected $cityDistrictKladrId;

    /**
     * @var null|string
     */
    protected $cityDistrictType;

    /**
     * @var null|string
     */
    protected $cityDistrictTypeFull;

    /**
     * @var null|string
     */
    protected $cityDistrictWithType;

    /**
     * @var null|string
     */
    protected $cityFiasId;

    /**
     * @var null|string
     */
    protected $cityKladrId;

    /**
     * @var null|string
     */
    protected $cityType;

    /**
     * @var null|string
     */
    protected $cityTypeFull;

    /**
     * @var null|string
     */
    protected $cityWithType;

    /**
     * @var null|string
     */
    protected $country;

    /**
     * @var null|string
     */
    protected $countryIsoCode;

    /**
     * @var null|mixed[]
     */
    protected $custom;

    /**
     * @var AddressDivisions
     */
    protected $divisions;

    /**
     * @var null|string
     */
    protected $entrance;

    /**
     * @var null|string
     */
    protected $federalDistrict;

    /**
     * @var null|string
     */
    protected $fiasActualityState;

    /**
     * @var null|string
     */
    protected $fiasCode;

    /**
     * @var null|string
     */
    protected $fiasId;

    /**
     * @var null|string
     */
    protected $fiasLevel;

    /**
     * @var null|string
     */
    protected $flat;

    /**
     * @var null|string
     */
    protected $flatArea;

    /**
     * @var null|string
     */
    protected $flatCadnum;

    /**
     * @var null|string
     */
    protected $flatFiasId;

    /**
     * @var null|string
     */
    protected $flatPrice;

    /**
     * @var null|string
     */
    protected $flatType;

    /**
     * @var null|string
     */
    protected $flatTypeFull;

    /**
     * @var null|string
     */
    protected $floor;

    /**
     * @var null|string
     */
    protected $geoLat;

    /**
     * @var null|string
     */
    protected $geoLon;

    /**
     * @var null|string
     */
    protected $geonameId;

    /**
     * @var null|string[]
     */
    protected $historyValues;

    /**
     * @var null|string
     */
    protected $house;

    /**
     * @var null|string
     */
    protected $houseCadnum;

    /**
     * @var null|string
     */
    protected $houseFiasId;

    /**
     * @var null|string
     */
    protected $houseFlatCount;

    /**
     * @var null|string
     */
    protected $houseKladrId;

    /**
     * @var null|string
     */
    protected $houseType;

    /**
     * @var null|string
     */
    protected $houseTypeFull;

    /**
     * @var null|string
     */
    protected $kladrId;

    /**
     * @var null|Metro[]
     */
    protected $metro;

    /**
     * @var null|string
     */
    protected $okato;

    /**
     * @var null|string
     */
    protected $oktmo;

    /**
     * @var null|string
     */
    protected $postalBox;

    /**
     * @var null|string
     */
    protected $postalCode;

    /**
     * @var null|string
     */
    protected $qc;

    /**
     * @var null|string
     */
    protected $qcComplete;

    /**
     * @var null|string
     */
    protected $qcGeo;

    /**
     * @var null|string
     */
    protected $qcHouse;

    /**
     * @var null|string
     */
    protected $region;

    /**
     * @var null|string
     */
    protected $regionFiasId;

    /**
     * @var null|string
     */
    protected $regionIsoCode;

    /**
     * @var null|string
     */
    protected $regionKladrId;

    /**
     * @var null|string
     */
    protected $regionType;

    /**
     * @var null|string
     */
    protected $regionTypeFull;

    /**
     * @var null|string
     */
    protected $regionWithType;

    /**
     * @var null|string
     */
    protected $room;

    /**
     * @var null|string
     */
    protected $roomCadnum;

    /**
     * @var null|string
     */
    protected $roomFiasId;

    /**
     * @var null|string
     */
    protected $roomType;

    /**
     * @var null|string
     */
    protected $roomTypeFull;

    /**
     * @var null|string
     */
    protected $settlement;

    /**
     * @var null|string
     */
    protected $settlementFiasId;

    /**
     * @var null|string
     */
    protected $settlementKladrId;

    /**
     * @var null|string
     */
    protected $settlementType;

    /**
     * @var null|string
     */
    protected $settlementTypeFull;

    /**
     * @var null|string
     */
    protected $settlementWithType;

    /**
     * @var null|string
     */
    protected $source;

    /**
     * @var null|string
     */
    protected $squareMeterPrice;

    /**
     * @var null|string
     */
    protected $stead;

    /**
     * @var null|string
     */
    protected $steadCadnum;

    /**
     * @var null|string
     */
    protected $steadFiasId;

    /**
     * @var null|string
     */
    protected $steadType;

    /**
     * @var null|string
     */
    protected $steadTypeFull;

    /**
     * @var null|string
     */
    protected $street;

    /**
     * @var null|string
     */
    protected $streetFiasId;

    /**
     * @var null|string
     */
    protected $streetKladrId;

    /**
     * @var null|string
     */
    protected $streetType;

    /**
     * @var null|string
     */
    protected $streetTypeFull;

    /**
     * @var null|string
     */
    protected $streetWithType;

    /**
     * @var null|string
     */
    protected $subArea;

    /**
     * @var null|string
     */
    protected $subAreaFiasId;

    /**
     * @var null|string
     */
    protected $subAreaKladrId;

    /**
     * @var null|string
     */
    protected $subAreaType;

    /**
     * @var null|string
     */
    protected $subAreaTypeFull;

    /**
     * @var null|string
     */
    protected $subAreaWithType;

    /**
     * @var null|string
     */
    protected $taxOffice;

    /**
     * @var null|string
     */
    protected $taxOfficeLegal;

    /**
     * @var null|string
     */
    protected $timezone;

    /**
     * @var null|string
     */
    protected $unparsedParts;

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getAreaFiasId(): ?string
    {
        return $this->areaFiasId;
    }

    public function setAreaFiasId(?string $areaFiasId): self
    {
        $this->areaFiasId = $areaFiasId;

        return $this;
    }

    public function getAreaKladrId(): ?string
    {
        return $this->areaKladrId;
    }

    public function setAreaKladrId(?string $areaKladrId): self
    {
        $this->areaKladrId = $areaKladrId;

        return $this;
    }

    public function getAreaType(): ?string
    {
        return $this->areaType;
    }

    public function setAreaType(?string $areaType): self
    {
        $this->areaType = $areaType;

        return $this;
    }

    public function getAreaTypeFull(): ?string
    {
        return $this->areaTypeFull;
    }

    public function setAreaTypeFull(?string $areaTypeFull): self
    {
        $this->areaTypeFull = $areaTypeFull;

        return $this;
    }

    public function getAreaWithType(): ?string
    {
        return $this->areaWithType;
    }

    public function setAreaWithType(?string $areaWithType): self
    {
        $this->areaWithType = $areaWithType;

        return $this;
    }

    public function getBeltwayDistance(): ?string
    {
        return $this->beltwayDistance;
    }

    public function setBeltwayDistance(?string $beltwayDistance): self
    {
        $this->beltwayDistance = $beltwayDistance;

        return $this;
    }

    public function getBeltwayHit(): ?string
    {
        return $this->beltwayHit;
    }

    public function setBeltwayHit(?string $beltwayHit): self
    {
        $this->beltwayHit = $beltwayHit;

        return $this;
    }

    public function getBlock(): ?string
    {
        return $this->block;
    }

    public function setBlock(?string $block): self
    {
        $this->block = $block;

        return $this;
    }

    public function getBlockType(): ?string
    {
        return $this->blockType;
    }

    public function setBlockType(?string $blockType): self
    {
        $this->blockType = $blockType;

        return $this;
    }

    public function getBlockTypeFull(): ?string
    {
        return $this->blockTypeFull;
    }

    public function setBlockTypeFull(?string $blockTypeFull): self
    {
        $this->blockTypeFull = $blockTypeFull;

        return $this;
    }

    public function getCapitalMarker(): ?string
    {
        return $this->capitalMarker;
    }

    public function setCapitalMarker(?string $capitalMarker): self
    {
        $this->capitalMarker = $capitalMarker;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCityArea(): ?string
    {
        return $this->cityArea;
    }

    public function setCityArea(?string $cityArea): self
    {
        $this->cityArea = $cityArea;

        return $this;
    }

    public function getCityDistrict(): ?string
    {
        return $this->cityDistrict;
    }

    public function setCityDistrict(?string $cityDistrict): self
    {
        $this->cityDistrict = $cityDistrict;

        return $this;
    }

    public function getCityDistrictFiasId(): ?string
    {
        return $this->cityDistrictFiasId;
    }

    public function setCityDistrictFiasId(?string $cityDistrictFiasId): self
    {
        $this->cityDistrictFiasId = $cityDistrictFiasId;

        return $this;
    }

    public function getCityDistrictKladrId(): ?string
    {
        return $this->cityDistrictKladrId;
    }

    public function setCityDistrictKladrId(?string $cityDistrictKladrId): self
    {
        $this->cityDistrictKladrId = $cityDistrictKladrId;

        return $this;
    }

    public function getCityDistrictType(): ?string
    {
        return $this->cityDistrictType;
    }

    public function setCityDistrictType(?string $cityDistrictType): self
    {
        $this->cityDistrictType = $cityDistrictType;

        return $this;
    }

    public function getCityDistrictTypeFull(): ?string
    {
        return $this->cityDistrictTypeFull;
    }

    public function setCityDistrictTypeFull(?string $cityDistrictTypeFull): self
    {
        $this->cityDistrictTypeFull = $cityDistrictTypeFull;

        return $this;
    }

    public function getCityDistrictWithType(): ?string
    {
        return $this->cityDistrictWithType;
    }

    public function setCityDistrictWithType(?string $cityDistrictWithType): self
    {
        $this->cityDistrictWithType = $cityDistrictWithType;

        return $this;
    }

    public function getCityFiasId(): ?string
    {
        return $this->cityFiasId;
    }

    public function setCityFiasId(?string $cityFiasId): self
    {
        $this->cityFiasId = $cityFiasId;

        return $this;
    }

    public function getCityKladrId(): ?string
    {
        return $this->cityKladrId;
    }

    public function setCityKladrId(?string $cityKladrId): self
    {
        $this->cityKladrId = $cityKladrId;

        return $this;
    }

    public function getCityType(): ?string
    {
        return $this->cityType;
    }

    public function setCityType(?string $cityType): self
    {
        $this->cityType = $cityType;

        return $this;
    }

    public function getCityTypeFull(): ?string
    {
        return $this->cityTypeFull;
    }

    public function setCityTypeFull(?string $cityTypeFull): self
    {
        $this->cityTypeFull = $cityTypeFull;

        return $this;
    }

    public function getCityWithType(): ?string
    {
        return $this->cityWithType;
    }

    public function setCityWithType(?string $cityWithType): self
    {
        $this->cityWithType = $cityWithType;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCountryIsoCode(): ?string
    {
        return $this->countryIsoCode;
    }

    public function setCountryIsoCode(?string $countryIsoCode): self
    {
        $this->countryIsoCode = $countryIsoCode;

        return $this;
    }

    /**
     * @return null|mixed[]
     */
    public function getCustom(): ?array
    {
        return $this->custom;
    }

    /**
     * @param null|mixed[] $custom
     */
    public function setCustom(?array $custom): self
    {
        $this->custom = $custom;

        return $this;
    }

    public function getDivisions(): AddressDivisions
    {
        return $this->divisions;
    }

    public function setDivisions(AddressDivisions $divisions): self
    {
        $this->divisions = $divisions;

        return $this;
    }

    public function getEntrance(): ?string
    {
        return $this->entrance;
    }

    public function setEntrance(?string $entrance): self
    {
        $this->entrance = $entrance;

        return $this;
    }

    public function getFederalDistrict(): ?string
    {
        return $this->federalDistrict;
    }

    public function setFederalDistrict(?string $federalDistrict): self
    {
        $this->federalDistrict = $federalDistrict;

        return $this;
    }

    public function getFiasActualityState(): ?string
    {
        return $this->fiasActualityState;
    }

    public function setFiasActualityState(?string $fiasActualityState): self
    {
        $this->fiasActualityState = $fiasActualityState;

        return $this;
    }

    public function getFiasCode(): ?string
    {
        return $this->fiasCode;
    }

    public function setFiasCode(?string $fiasCode): self
    {
        $this->fiasCode = $fiasCode;

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

    public function getFiasLevel(): ?string
    {
        return $this->fiasLevel;
    }

    public function setFiasLevel(?string $fiasLevel): self
    {
        $this->fiasLevel = $fiasLevel;

        return $this;
    }

    public function getFlat(): ?string
    {
        return $this->flat;
    }

    public function setFlat(?string $flat): self
    {
        $this->flat = $flat;

        return $this;
    }

    public function getFlatArea(): ?string
    {
        return $this->flatArea;
    }

    public function setFlatArea(?string $flatArea): self
    {
        $this->flatArea = $flatArea;

        return $this;
    }

    public function getFlatCadnum(): ?string
    {
        return $this->flatCadnum;
    }

    public function setFlatCadnum(?string $flatCadnum): self
    {
        $this->flatCadnum = $flatCadnum;

        return $this;
    }

    public function getFlatFiasId(): ?string
    {
        return $this->flatFiasId;
    }

    public function setFlatFiasId(?string $flatFiasId): self
    {
        $this->flatFiasId = $flatFiasId;

        return $this;
    }

    public function getFlatPrice(): ?string
    {
        return $this->flatPrice;
    }

    public function setFlatPrice(?string $flatPrice): self
    {
        $this->flatPrice = $flatPrice;

        return $this;
    }

    public function getFlatType(): ?string
    {
        return $this->flatType;
    }

    public function setFlatType(?string $flatType): self
    {
        $this->flatType = $flatType;

        return $this;
    }

    public function getFlatTypeFull(): ?string
    {
        return $this->flatTypeFull;
    }

    public function setFlatTypeFull(?string $flatTypeFull): self
    {
        $this->flatTypeFull = $flatTypeFull;

        return $this;
    }

    public function getFloor(): ?string
    {
        return $this->floor;
    }

    public function setFloor(?string $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getGeoLat(): ?string
    {
        return $this->geoLat;
    }

    public function setGeoLat(?string $geoLat): self
    {
        $this->geoLat = $geoLat;

        return $this;
    }

    public function getGeoLon(): ?string
    {
        return $this->geoLon;
    }

    public function setGeoLon(?string $geoLon): self
    {
        $this->geoLon = $geoLon;

        return $this;
    }

    public function getGeonameId(): ?string
    {
        return $this->geonameId;
    }

    public function setGeonameId(?string $geonameId): self
    {
        $this->geonameId = $geonameId;

        return $this;
    }

    /**
     * @return null|string[]
     */
    public function getHistoryValues(): ?array
    {
        return $this->historyValues;
    }

    /**
     * @param null|string[] $historyValues
     */
    public function setHistoryValues(?array $historyValues): self
    {
        $this->historyValues = $historyValues;

        return $this;
    }

    public function getHouse(): ?string
    {
        return $this->house;
    }

    public function setHouse(?string $house): self
    {
        $this->house = $house;

        return $this;
    }

    public function getHouseCadnum(): ?string
    {
        return $this->houseCadnum;
    }

    public function setHouseCadnum(?string $houseCadnum): self
    {
        $this->houseCadnum = $houseCadnum;

        return $this;
    }

    public function getHouseFiasId(): ?string
    {
        return $this->houseFiasId;
    }

    public function setHouseFiasId(?string $houseFiasId): self
    {
        $this->houseFiasId = $houseFiasId;

        return $this;
    }

    public function getHouseFlatCount(): ?string
    {
        return $this->houseFlatCount;
    }

    public function setHouseFlatCount(?string $houseFlatCount): self
    {
        $this->houseFlatCount = $houseFlatCount;

        return $this;
    }

    public function getHouseKladrId(): ?string
    {
        return $this->houseKladrId;
    }

    public function setHouseKladrId(?string $houseKladrId): self
    {
        $this->houseKladrId = $houseKladrId;

        return $this;
    }

    public function getHouseType(): ?string
    {
        return $this->houseType;
    }

    public function setHouseType(?string $houseType): self
    {
        $this->houseType = $houseType;

        return $this;
    }

    public function getHouseTypeFull(): ?string
    {
        return $this->houseTypeFull;
    }

    public function setHouseTypeFull(?string $houseTypeFull): self
    {
        $this->houseTypeFull = $houseTypeFull;

        return $this;
    }

    public function getKladrId(): ?string
    {
        return $this->kladrId;
    }

    public function setKladrId(?string $kladrId): self
    {
        $this->kladrId = $kladrId;

        return $this;
    }

    /**
     * @return null|Metro[]
     */
    public function getMetro(): ?array
    {
        return $this->metro;
    }

    /**
     * @param null|Metro[] $metro
     */
    public function setMetro(?array $metro): self
    {
        $this->metro = $metro;

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

    public function getOktmo(): ?string
    {
        return $this->oktmo;
    }

    public function setOktmo(?string $oktmo): self
    {
        $this->oktmo = $oktmo;

        return $this;
    }

    public function getPostalBox(): ?string
    {
        return $this->postalBox;
    }

    public function setPostalBox(?string $postalBox): self
    {
        $this->postalBox = $postalBox;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

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

    public function getQcComplete(): ?string
    {
        return $this->qcComplete;
    }

    public function setQcComplete(?string $qcComplete): self
    {
        $this->qcComplete = $qcComplete;

        return $this;
    }

    public function getQcGeo(): ?string
    {
        return $this->qcGeo;
    }

    public function setQcGeo(?string $qcGeo): self
    {
        $this->qcGeo = $qcGeo;

        return $this;
    }

    public function getQcHouse(): ?string
    {
        return $this->qcHouse;
    }

    public function setQcHouse(?string $qcHouse): self
    {
        $this->qcHouse = $qcHouse;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getRegionFiasId(): ?string
    {
        return $this->regionFiasId;
    }

    public function setRegionFiasId(?string $regionFiasId): self
    {
        $this->regionFiasId = $regionFiasId;

        return $this;
    }

    public function getRegionIsoCode(): ?string
    {
        return $this->regionIsoCode;
    }

    public function setRegionIsoCode(?string $regionIsoCode): self
    {
        $this->regionIsoCode = $regionIsoCode;

        return $this;
    }

    public function getRegionKladrId(): ?string
    {
        return $this->regionKladrId;
    }

    public function setRegionKladrId(?string $regionKladrId): self
    {
        $this->regionKladrId = $regionKladrId;

        return $this;
    }

    public function getRegionType(): ?string
    {
        return $this->regionType;
    }

    public function setRegionType(?string $regionType): self
    {
        $this->regionType = $regionType;

        return $this;
    }

    public function getRegionTypeFull(): ?string
    {
        return $this->regionTypeFull;
    }

    public function setRegionTypeFull(?string $regionTypeFull): self
    {
        $this->regionTypeFull = $regionTypeFull;

        return $this;
    }

    public function getRegionWithType(): ?string
    {
        return $this->regionWithType;
    }

    public function setRegionWithType(?string $regionWithType): self
    {
        $this->regionWithType = $regionWithType;

        return $this;
    }

    public function getRoom(): ?string
    {
        return $this->room;
    }

    public function setRoom(?string $room): self
    {
        $this->room = $room;

        return $this;
    }

    public function getRoomCadnum(): ?string
    {
        return $this->roomCadnum;
    }

    public function setRoomCadnum(?string $roomCadnum): self
    {
        $this->roomCadnum = $roomCadnum;

        return $this;
    }

    public function getRoomFiasId(): ?string
    {
        return $this->roomFiasId;
    }

    public function setRoomFiasId(?string $roomFiasId): self
    {
        $this->roomFiasId = $roomFiasId;

        return $this;
    }

    public function getRoomType(): ?string
    {
        return $this->roomType;
    }

    public function setRoomType(?string $roomType): self
    {
        $this->roomType = $roomType;

        return $this;
    }

    public function getRoomTypeFull(): ?string
    {
        return $this->roomTypeFull;
    }

    public function setRoomTypeFull(?string $roomTypeFull): self
    {
        $this->roomTypeFull = $roomTypeFull;

        return $this;
    }

    public function getSettlement(): ?string
    {
        return $this->settlement;
    }

    public function setSettlement(?string $settlement): self
    {
        $this->settlement = $settlement;

        return $this;
    }

    public function getSettlementFiasId(): ?string
    {
        return $this->settlementFiasId;
    }

    public function setSettlementFiasId(?string $settlementFiasId): self
    {
        $this->settlementFiasId = $settlementFiasId;

        return $this;
    }

    public function getSettlementKladrId(): ?string
    {
        return $this->settlementKladrId;
    }

    public function setSettlementKladrId(?string $settlementKladrId): self
    {
        $this->settlementKladrId = $settlementKladrId;

        return $this;
    }

    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }

    public function setSettlementType(?string $settlementType): self
    {
        $this->settlementType = $settlementType;

        return $this;
    }

    public function getSettlementTypeFull(): ?string
    {
        return $this->settlementTypeFull;
    }

    public function setSettlementTypeFull(?string $settlementTypeFull): self
    {
        $this->settlementTypeFull = $settlementTypeFull;

        return $this;
    }

    public function getSettlementWithType(): ?string
    {
        return $this->settlementWithType;
    }

    public function setSettlementWithType(?string $settlementWithType): self
    {
        $this->settlementWithType = $settlementWithType;

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

    public function getSquareMeterPrice(): ?string
    {
        return $this->squareMeterPrice;
    }

    public function setSquareMeterPrice(?string $squareMeterPrice): self
    {
        $this->squareMeterPrice = $squareMeterPrice;

        return $this;
    }

    public function getStead(): ?string
    {
        return $this->stead;
    }

    public function setStead(?string $stead): self
    {
        $this->stead = $stead;

        return $this;
    }

    public function getSteadCadnum(): ?string
    {
        return $this->steadCadnum;
    }

    public function setSteadCadnum(?string $steadCadnum): self
    {
        $this->steadCadnum = $steadCadnum;

        return $this;
    }

    public function getSteadFiasId(): ?string
    {
        return $this->steadFiasId;
    }

    public function setSteadFiasId(?string $steadFiasId): self
    {
        $this->steadFiasId = $steadFiasId;

        return $this;
    }

    public function getSteadType(): ?string
    {
        return $this->steadType;
    }

    public function setSteadType(?string $steadType): self
    {
        $this->steadType = $steadType;

        return $this;
    }

    public function getSteadTypeFull(): ?string
    {
        return $this->steadTypeFull;
    }

    public function setSteadTypeFull(?string $steadTypeFull): self
    {
        $this->steadTypeFull = $steadTypeFull;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getStreetFiasId(): ?string
    {
        return $this->streetFiasId;
    }

    public function setStreetFiasId(?string $streetFiasId): self
    {
        $this->streetFiasId = $streetFiasId;

        return $this;
    }

    public function getStreetKladrId(): ?string
    {
        return $this->streetKladrId;
    }

    public function setStreetKladrId(?string $streetKladrId): self
    {
        $this->streetKladrId = $streetKladrId;

        return $this;
    }

    public function getStreetType(): ?string
    {
        return $this->streetType;
    }

    public function setStreetType(?string $streetType): self
    {
        $this->streetType = $streetType;

        return $this;
    }

    public function getStreetTypeFull(): ?string
    {
        return $this->streetTypeFull;
    }

    public function setStreetTypeFull(?string $streetTypeFull): self
    {
        $this->streetTypeFull = $streetTypeFull;

        return $this;
    }

    public function getStreetWithType(): ?string
    {
        return $this->streetWithType;
    }

    public function setStreetWithType(?string $streetWithType): self
    {
        $this->streetWithType = $streetWithType;

        return $this;
    }

    public function getSubArea(): ?string
    {
        return $this->subArea;
    }

    public function setSubArea(?string $subArea): self
    {
        $this->subArea = $subArea;

        return $this;
    }

    public function getSubAreaFiasId(): ?string
    {
        return $this->subAreaFiasId;
    }

    public function setSubAreaFiasId(?string $subAreaFiasId): self
    {
        $this->subAreaFiasId = $subAreaFiasId;

        return $this;
    }

    public function getSubAreaKladrId(): ?string
    {
        return $this->subAreaKladrId;
    }

    public function setSubAreaKladrId(?string $subAreaKladrId): self
    {
        $this->subAreaKladrId = $subAreaKladrId;

        return $this;
    }

    public function getSubAreaType(): ?string
    {
        return $this->subAreaType;
    }

    public function setSubAreaType(?string $subAreaType): self
    {
        $this->subAreaType = $subAreaType;

        return $this;
    }

    public function getSubAreaTypeFull(): ?string
    {
        return $this->subAreaTypeFull;
    }

    public function setSubAreaTypeFull(?string $subAreaTypeFull): self
    {
        $this->subAreaTypeFull = $subAreaTypeFull;

        return $this;
    }

    public function getSubAreaWithType(): ?string
    {
        return $this->subAreaWithType;
    }

    public function setSubAreaWithType(?string $subAreaWithType): self
    {
        $this->subAreaWithType = $subAreaWithType;

        return $this;
    }

    public function getTaxOffice(): ?string
    {
        return $this->taxOffice;
    }

    public function setTaxOffice(?string $taxOffice): self
    {
        $this->taxOffice = $taxOffice;

        return $this;
    }

    public function getTaxOfficeLegal(): ?string
    {
        return $this->taxOfficeLegal;
    }

    public function setTaxOfficeLegal(?string $taxOfficeLegal): self
    {
        $this->taxOfficeLegal = $taxOfficeLegal;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getUnparsedParts(): ?string
    {
        return $this->unparsedParts;
    }

    public function setUnparsedParts(?string $unparsedParts): self
    {
        $this->unparsedParts = $unparsedParts;

        return $this;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\FiasAddress;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FiasAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\FiasAddress' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\FiasAddress' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new FiasAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('area', $data) && null !== $data['area']) {
            $object->setArea($data['area']);
        } elseif (\array_key_exists('area', $data) && null === $data['area']) {
            $object->setArea(null);
        }
        if (\array_key_exists('area_fias_id', $data) && null !== $data['area_fias_id']) {
            $object->setAreaFiasId($data['area_fias_id']);
        } elseif (\array_key_exists('area_fias_id', $data) && null === $data['area_fias_id']) {
            $object->setAreaFiasId(null);
        }
        if (\array_key_exists('area_kladr_id', $data) && null !== $data['area_kladr_id']) {
            $object->setAreaKladrId($data['area_kladr_id']);
        } elseif (\array_key_exists('area_kladr_id', $data) && null === $data['area_kladr_id']) {
            $object->setAreaKladrId(null);
        }
        if (\array_key_exists('area_type', $data) && null !== $data['area_type']) {
            $object->setAreaType($data['area_type']);
        } elseif (\array_key_exists('area_type', $data) && null === $data['area_type']) {
            $object->setAreaType(null);
        }
        if (\array_key_exists('area_type_full', $data) && null !== $data['area_type_full']) {
            $object->setAreaTypeFull($data['area_type_full']);
        } elseif (\array_key_exists('area_type_full', $data) && null === $data['area_type_full']) {
            $object->setAreaTypeFull(null);
        }
        if (\array_key_exists('area_with_type', $data) && null !== $data['area_with_type']) {
            $object->setAreaWithType($data['area_with_type']);
        } elseif (\array_key_exists('area_with_type', $data) && null === $data['area_with_type']) {
            $object->setAreaWithType(null);
        }
        if (\array_key_exists('block', $data) && null !== $data['block']) {
            $object->setBlock($data['block']);
        } elseif (\array_key_exists('block', $data) && null === $data['block']) {
            $object->setBlock(null);
        }
        if (\array_key_exists('building', $data) && null !== $data['building']) {
            $object->setBuilding($data['building']);
        } elseif (\array_key_exists('building', $data) && null === $data['building']) {
            $object->setBuilding(null);
        }
        if (\array_key_exists('building_type', $data) && null !== $data['building_type']) {
            $object->setBuildingType($data['building_type']);
        } elseif (\array_key_exists('building_type', $data) && null === $data['building_type']) {
            $object->setBuildingType(null);
        }
        if (\array_key_exists('cadastral_number', $data) && null !== $data['cadastral_number']) {
            $object->setCadastralNumber($data['cadastral_number']);
        } elseif (\array_key_exists('cadastral_number', $data) && null === $data['cadastral_number']) {
            $object->setCadastralNumber(null);
        }
        if (\array_key_exists('capital_marker', $data) && null !== $data['capital_marker']) {
            $object->setCapitalMarker($data['capital_marker']);
        } elseif (\array_key_exists('capital_marker', $data) && null === $data['capital_marker']) {
            $object->setCapitalMarker(null);
        }
        if (\array_key_exists('city', $data) && null !== $data['city']) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && null === $data['city']) {
            $object->setCity(null);
        }
        if (\array_key_exists('city_district', $data) && null !== $data['city_district']) {
            $object->setCityDistrict($data['city_district']);
        } elseif (\array_key_exists('city_district', $data) && null === $data['city_district']) {
            $object->setCityDistrict(null);
        }
        if (\array_key_exists('city_district_fias_id', $data) && null !== $data['city_district_fias_id']) {
            $object->setCityDistrictFiasId($data['city_district_fias_id']);
        } elseif (\array_key_exists('city_district_fias_id', $data) && null === $data['city_district_fias_id']) {
            $object->setCityDistrictFiasId(null);
        }
        if (\array_key_exists('city_district_kladr_id', $data) && null !== $data['city_district_kladr_id']) {
            $object->setCityDistrictKladrId($data['city_district_kladr_id']);
        } elseif (\array_key_exists('city_district_kladr_id', $data) && null === $data['city_district_kladr_id']) {
            $object->setCityDistrictKladrId(null);
        }
        if (\array_key_exists('city_district_type', $data) && null !== $data['city_district_type']) {
            $object->setCityDistrictType($data['city_district_type']);
        } elseif (\array_key_exists('city_district_type', $data) && null === $data['city_district_type']) {
            $object->setCityDistrictType(null);
        }
        if (\array_key_exists('city_district_type_full', $data) && null !== $data['city_district_type_full']) {
            $object->setCityDistrictTypeFull($data['city_district_type_full']);
        } elseif (\array_key_exists('city_district_type_full', $data) && null === $data['city_district_type_full']) {
            $object->setCityDistrictTypeFull(null);
        }
        if (\array_key_exists('city_district_with_type', $data) && null !== $data['city_district_with_type']) {
            $object->setCityDistrictWithType($data['city_district_with_type']);
        } elseif (\array_key_exists('city_district_with_type', $data) && null === $data['city_district_with_type']) {
            $object->setCityDistrictWithType(null);
        }
        if (\array_key_exists('city_fias_id', $data) && null !== $data['city_fias_id']) {
            $object->setCityFiasId($data['city_fias_id']);
        } elseif (\array_key_exists('city_fias_id', $data) && null === $data['city_fias_id']) {
            $object->setCityFiasId(null);
        }
        if (\array_key_exists('city_kladr_id', $data) && null !== $data['city_kladr_id']) {
            $object->setCityKladrId($data['city_kladr_id']);
        } elseif (\array_key_exists('city_kladr_id', $data) && null === $data['city_kladr_id']) {
            $object->setCityKladrId(null);
        }
        if (\array_key_exists('city_type', $data) && null !== $data['city_type']) {
            $object->setCityType($data['city_type']);
        } elseif (\array_key_exists('city_type', $data) && null === $data['city_type']) {
            $object->setCityType(null);
        }
        if (\array_key_exists('city_type_full', $data) && null !== $data['city_type_full']) {
            $object->setCityTypeFull($data['city_type_full']);
        } elseif (\array_key_exists('city_type_full', $data) && null === $data['city_type_full']) {
            $object->setCityTypeFull(null);
        }
        if (\array_key_exists('city_with_type', $data) && null !== $data['city_with_type']) {
            $object->setCityWithType($data['city_with_type']);
        } elseif (\array_key_exists('city_with_type', $data) && null === $data['city_with_type']) {
            $object->setCityWithType(null);
        }
        if (\array_key_exists('fias_actuality_state', $data) && null !== $data['fias_actuality_state']) {
            $object->setFiasActualityState($data['fias_actuality_state']);
        } elseif (\array_key_exists('fias_actuality_state', $data) && null === $data['fias_actuality_state']) {
            $object->setFiasActualityState(null);
        }
        if (\array_key_exists('fias_code', $data) && null !== $data['fias_code']) {
            $object->setFiasCode($data['fias_code']);
        } elseif (\array_key_exists('fias_code', $data) && null === $data['fias_code']) {
            $object->setFiasCode(null);
        }
        if (\array_key_exists('fias_id', $data) && null !== $data['fias_id']) {
            $object->setFiasId($data['fias_id']);
        } elseif (\array_key_exists('fias_id', $data) && null === $data['fias_id']) {
            $object->setFiasId(null);
        }
        if (\array_key_exists('fias_level', $data) && null !== $data['fias_level']) {
            $object->setFiasLevel($data['fias_level']);
        } elseif (\array_key_exists('fias_level', $data) && null === $data['fias_level']) {
            $object->setFiasLevel(null);
        }
        if (\array_key_exists('history_values', $data) && null !== $data['history_values']) {
            $values = [];
            foreach ($data['history_values'] as $value) {
                $values[] = $value;
            }
            $object->setHistoryValues($values);
        } elseif (\array_key_exists('history_values', $data) && null === $data['history_values']) {
            $object->setHistoryValues(null);
        }
        if (\array_key_exists('house', $data) && null !== $data['house']) {
            $object->setHouse($data['house']);
        } elseif (\array_key_exists('house', $data) && null === $data['house']) {
            $object->setHouse(null);
        }
        if (\array_key_exists('house_fias_id', $data) && null !== $data['house_fias_id']) {
            $object->setHouseFiasId($data['house_fias_id']);
        } elseif (\array_key_exists('house_fias_id', $data) && null === $data['house_fias_id']) {
            $object->setHouseFiasId(null);
        }
        if (\array_key_exists('house_kladr_id', $data) && null !== $data['house_kladr_id']) {
            $object->setHouseKladrId($data['house_kladr_id']);
        } elseif (\array_key_exists('house_kladr_id', $data) && null === $data['house_kladr_id']) {
            $object->setHouseKladrId(null);
        }
        if (\array_key_exists('house_type', $data) && null !== $data['house_type']) {
            $object->setHouseType($data['house_type']);
        } elseif (\array_key_exists('house_type', $data) && null === $data['house_type']) {
            $object->setHouseType(null);
        }
        if (\array_key_exists('kladr_id', $data) && null !== $data['kladr_id']) {
            $object->setKladrId($data['kladr_id']);
        } elseif (\array_key_exists('kladr_id', $data) && null === $data['kladr_id']) {
            $object->setKladrId(null);
        }
        if (\array_key_exists('okato', $data) && null !== $data['okato']) {
            $object->setOkato($data['okato']);
        } elseif (\array_key_exists('okato', $data) && null === $data['okato']) {
            $object->setOkato(null);
        }
        if (\array_key_exists('oktmo', $data) && null !== $data['oktmo']) {
            $object->setOktmo($data['oktmo']);
        } elseif (\array_key_exists('oktmo', $data) && null === $data['oktmo']) {
            $object->setOktmo(null);
        }
        if (\array_key_exists('planning_structure', $data) && null !== $data['planning_structure']) {
            $object->setPlanningStructure($data['planning_structure']);
        } elseif (\array_key_exists('planning_structure', $data) && null === $data['planning_structure']) {
            $object->setPlanningStructure(null);
        }
        if (\array_key_exists('planning_structure_fias_id', $data) && null !== $data['planning_structure_fias_id']) {
            $object->setPlanningStructureFiasId($data['planning_structure_fias_id']);
        } elseif (\array_key_exists('planning_structure_fias_id', $data) && null === $data['planning_structure_fias_id']) {
            $object->setPlanningStructureFiasId(null);
        }
        if (\array_key_exists('planning_structure_kladr_id', $data) && null !== $data['planning_structure_kladr_id']) {
            $object->setPlanningStructureKladrId($data['planning_structure_kladr_id']);
        } elseif (\array_key_exists('planning_structure_kladr_id', $data) && null === $data['planning_structure_kladr_id']) {
            $object->setPlanningStructureKladrId(null);
        }
        if (\array_key_exists('planning_structure_type', $data) && null !== $data['planning_structure_type']) {
            $object->setPlanningStructureType($data['planning_structure_type']);
        } elseif (\array_key_exists('planning_structure_type', $data) && null === $data['planning_structure_type']) {
            $object->setPlanningStructureType(null);
        }
        if (\array_key_exists('planning_structure_type_full', $data) && null !== $data['planning_structure_type_full']) {
            $object->setPlanningStructureTypeFull($data['planning_structure_type_full']);
        } elseif (\array_key_exists('planning_structure_type_full', $data) && null === $data['planning_structure_type_full']) {
            $object->setPlanningStructureTypeFull(null);
        }
        if (\array_key_exists('planning_structure_with_type', $data) && null !== $data['planning_structure_with_type']) {
            $object->setPlanningStructureWithType($data['planning_structure_with_type']);
        } elseif (\array_key_exists('planning_structure_with_type', $data) && null === $data['planning_structure_with_type']) {
            $object->setPlanningStructureWithType(null);
        }
        if (\array_key_exists('postal_code', $data) && null !== $data['postal_code']) {
            $object->setPostalCode($data['postal_code']);
        } elseif (\array_key_exists('postal_code', $data) && null === $data['postal_code']) {
            $object->setPostalCode(null);
        }
        if (\array_key_exists('qc', $data) && null !== $data['qc']) {
            $object->setQc($data['qc']);
        } elseif (\array_key_exists('qc', $data) && null === $data['qc']) {
            $object->setQc(null);
        }
        if (\array_key_exists('region', $data) && null !== $data['region']) {
            $object->setRegion($data['region']);
        } elseif (\array_key_exists('region', $data) && null === $data['region']) {
            $object->setRegion(null);
        }
        if (\array_key_exists('region_fias_id', $data) && null !== $data['region_fias_id']) {
            $object->setRegionFiasId($data['region_fias_id']);
        } elseif (\array_key_exists('region_fias_id', $data) && null === $data['region_fias_id']) {
            $object->setRegionFiasId(null);
        }
        if (\array_key_exists('region_kladr_id', $data) && null !== $data['region_kladr_id']) {
            $object->setRegionKladrId($data['region_kladr_id']);
        } elseif (\array_key_exists('region_kladr_id', $data) && null === $data['region_kladr_id']) {
            $object->setRegionKladrId(null);
        }
        if (\array_key_exists('region_type', $data) && null !== $data['region_type']) {
            $object->setRegionType($data['region_type']);
        } elseif (\array_key_exists('region_type', $data) && null === $data['region_type']) {
            $object->setRegionType(null);
        }
        if (\array_key_exists('region_type_full', $data) && null !== $data['region_type_full']) {
            $object->setRegionTypeFull($data['region_type_full']);
        } elseif (\array_key_exists('region_type_full', $data) && null === $data['region_type_full']) {
            $object->setRegionTypeFull(null);
        }
        if (\array_key_exists('region_with_type', $data) && null !== $data['region_with_type']) {
            $object->setRegionWithType($data['region_with_type']);
        } elseif (\array_key_exists('region_with_type', $data) && null === $data['region_with_type']) {
            $object->setRegionWithType(null);
        }
        if (\array_key_exists('settlement', $data) && null !== $data['settlement']) {
            $object->setSettlement($data['settlement']);
        } elseif (\array_key_exists('settlement', $data) && null === $data['settlement']) {
            $object->setSettlement(null);
        }
        if (\array_key_exists('settlement_fias_id', $data) && null !== $data['settlement_fias_id']) {
            $object->setSettlementFiasId($data['settlement_fias_id']);
        } elseif (\array_key_exists('settlement_fias_id', $data) && null === $data['settlement_fias_id']) {
            $object->setSettlementFiasId(null);
        }
        if (\array_key_exists('settlement_kladr_id', $data) && null !== $data['settlement_kladr_id']) {
            $object->setSettlementKladrId($data['settlement_kladr_id']);
        } elseif (\array_key_exists('settlement_kladr_id', $data) && null === $data['settlement_kladr_id']) {
            $object->setSettlementKladrId(null);
        }
        if (\array_key_exists('settlement_type', $data) && null !== $data['settlement_type']) {
            $object->setSettlementType($data['settlement_type']);
        } elseif (\array_key_exists('settlement_type', $data) && null === $data['settlement_type']) {
            $object->setSettlementType(null);
        }
        if (\array_key_exists('settlement_type_full', $data) && null !== $data['settlement_type_full']) {
            $object->setSettlementTypeFull($data['settlement_type_full']);
        } elseif (\array_key_exists('settlement_type_full', $data) && null === $data['settlement_type_full']) {
            $object->setSettlementTypeFull(null);
        }
        if (\array_key_exists('settlement_with_type', $data) && null !== $data['settlement_with_type']) {
            $object->setSettlementWithType($data['settlement_with_type']);
        } elseif (\array_key_exists('settlement_with_type', $data) && null === $data['settlement_with_type']) {
            $object->setSettlementWithType(null);
        }
        if (\array_key_exists('source', $data) && null !== $data['source']) {
            $object->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && null === $data['source']) {
            $object->setSource(null);
        }
        if (\array_key_exists('street', $data) && null !== $data['street']) {
            $object->setStreet($data['street']);
        } elseif (\array_key_exists('street', $data) && null === $data['street']) {
            $object->setStreet(null);
        }
        if (\array_key_exists('street_fias_id', $data) && null !== $data['street_fias_id']) {
            $object->setStreetFiasId($data['street_fias_id']);
        } elseif (\array_key_exists('street_fias_id', $data) && null === $data['street_fias_id']) {
            $object->setStreetFiasId(null);
        }
        if (\array_key_exists('street_kladr_id', $data) && null !== $data['street_kladr_id']) {
            $object->setStreetKladrId($data['street_kladr_id']);
        } elseif (\array_key_exists('street_kladr_id', $data) && null === $data['street_kladr_id']) {
            $object->setStreetKladrId(null);
        }
        if (\array_key_exists('street_type', $data) && null !== $data['street_type']) {
            $object->setStreetType($data['street_type']);
        } elseif (\array_key_exists('street_type', $data) && null === $data['street_type']) {
            $object->setStreetType(null);
        }
        if (\array_key_exists('street_type_full', $data) && null !== $data['street_type_full']) {
            $object->setStreetTypeFull($data['street_type_full']);
        } elseif (\array_key_exists('street_type_full', $data) && null === $data['street_type_full']) {
            $object->setStreetTypeFull(null);
        }
        if (\array_key_exists('street_with_type', $data) && null !== $data['street_with_type']) {
            $object->setStreetWithType($data['street_with_type']);
        } elseif (\array_key_exists('street_with_type', $data) && null === $data['street_with_type']) {
            $object->setStreetWithType(null);
        }
        if (\array_key_exists('tax_office', $data) && null !== $data['tax_office']) {
            $object->setTaxOffice($data['tax_office']);
        } elseif (\array_key_exists('tax_office', $data) && null === $data['tax_office']) {
            $object->setTaxOffice(null);
        }
        if (\array_key_exists('tax_office_legal', $data) && null !== $data['tax_office_legal']) {
            $object->setTaxOfficeLegal($data['tax_office_legal']);
        } elseif (\array_key_exists('tax_office_legal', $data) && null === $data['tax_office_legal']) {
            $object->setTaxOfficeLegal(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getArea()) {
            $data['area'] = $object->getArea();
        }
        if (null !== $object->getAreaFiasId()) {
            $data['area_fias_id'] = $object->getAreaFiasId();
        }
        if (null !== $object->getAreaKladrId()) {
            $data['area_kladr_id'] = $object->getAreaKladrId();
        }
        if (null !== $object->getAreaType()) {
            $data['area_type'] = $object->getAreaType();
        }
        if (null !== $object->getAreaTypeFull()) {
            $data['area_type_full'] = $object->getAreaTypeFull();
        }
        if (null !== $object->getAreaWithType()) {
            $data['area_with_type'] = $object->getAreaWithType();
        }
        if (null !== $object->getBlock()) {
            $data['block'] = $object->getBlock();
        }
        if (null !== $object->getBuilding()) {
            $data['building'] = $object->getBuilding();
        }
        if (null !== $object->getBuildingType()) {
            $data['building_type'] = $object->getBuildingType();
        }
        if (null !== $object->getCadastralNumber()) {
            $data['cadastral_number'] = $object->getCadastralNumber();
        }
        if (null !== $object->getCapitalMarker()) {
            $data['capital_marker'] = $object->getCapitalMarker();
        }
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getCityDistrict()) {
            $data['city_district'] = $object->getCityDistrict();
        }
        if (null !== $object->getCityDistrictFiasId()) {
            $data['city_district_fias_id'] = $object->getCityDistrictFiasId();
        }
        if (null !== $object->getCityDistrictKladrId()) {
            $data['city_district_kladr_id'] = $object->getCityDistrictKladrId();
        }
        if (null !== $object->getCityDistrictType()) {
            $data['city_district_type'] = $object->getCityDistrictType();
        }
        if (null !== $object->getCityDistrictTypeFull()) {
            $data['city_district_type_full'] = $object->getCityDistrictTypeFull();
        }
        if (null !== $object->getCityDistrictWithType()) {
            $data['city_district_with_type'] = $object->getCityDistrictWithType();
        }
        if (null !== $object->getCityFiasId()) {
            $data['city_fias_id'] = $object->getCityFiasId();
        }
        if (null !== $object->getCityKladrId()) {
            $data['city_kladr_id'] = $object->getCityKladrId();
        }
        if (null !== $object->getCityType()) {
            $data['city_type'] = $object->getCityType();
        }
        if (null !== $object->getCityTypeFull()) {
            $data['city_type_full'] = $object->getCityTypeFull();
        }
        if (null !== $object->getCityWithType()) {
            $data['city_with_type'] = $object->getCityWithType();
        }
        if (null !== $object->getFiasActualityState()) {
            $data['fias_actuality_state'] = $object->getFiasActualityState();
        }
        if (null !== $object->getFiasCode()) {
            $data['fias_code'] = $object->getFiasCode();
        }
        if (null !== $object->getFiasId()) {
            $data['fias_id'] = $object->getFiasId();
        }
        if (null !== $object->getFiasLevel()) {
            $data['fias_level'] = $object->getFiasLevel();
        }
        if (null !== $object->getHistoryValues()) {
            $values = [];
            foreach ($object->getHistoryValues() as $value) {
                $values[] = $value;
            }
            $data['history_values'] = $values;
        }
        if (null !== $object->getHouse()) {
            $data['house'] = $object->getHouse();
        }
        if (null !== $object->getHouseFiasId()) {
            $data['house_fias_id'] = $object->getHouseFiasId();
        }
        if (null !== $object->getHouseKladrId()) {
            $data['house_kladr_id'] = $object->getHouseKladrId();
        }
        if (null !== $object->getHouseType()) {
            $data['house_type'] = $object->getHouseType();
        }
        if (null !== $object->getKladrId()) {
            $data['kladr_id'] = $object->getKladrId();
        }
        if (null !== $object->getOkato()) {
            $data['okato'] = $object->getOkato();
        }
        if (null !== $object->getOktmo()) {
            $data['oktmo'] = $object->getOktmo();
        }
        if (null !== $object->getPlanningStructure()) {
            $data['planning_structure'] = $object->getPlanningStructure();
        }
        if (null !== $object->getPlanningStructureFiasId()) {
            $data['planning_structure_fias_id'] = $object->getPlanningStructureFiasId();
        }
        if (null !== $object->getPlanningStructureKladrId()) {
            $data['planning_structure_kladr_id'] = $object->getPlanningStructureKladrId();
        }
        if (null !== $object->getPlanningStructureType()) {
            $data['planning_structure_type'] = $object->getPlanningStructureType();
        }
        if (null !== $object->getPlanningStructureTypeFull()) {
            $data['planning_structure_type_full'] = $object->getPlanningStructureTypeFull();
        }
        if (null !== $object->getPlanningStructureWithType()) {
            $data['planning_structure_with_type'] = $object->getPlanningStructureWithType();
        }
        if (null !== $object->getPostalCode()) {
            $data['postal_code'] = $object->getPostalCode();
        }
        if (null !== $object->getQc()) {
            $data['qc'] = $object->getQc();
        }
        if (null !== $object->getRegion()) {
            $data['region'] = $object->getRegion();
        }
        if (null !== $object->getRegionFiasId()) {
            $data['region_fias_id'] = $object->getRegionFiasId();
        }
        if (null !== $object->getRegionKladrId()) {
            $data['region_kladr_id'] = $object->getRegionKladrId();
        }
        if (null !== $object->getRegionType()) {
            $data['region_type'] = $object->getRegionType();
        }
        if (null !== $object->getRegionTypeFull()) {
            $data['region_type_full'] = $object->getRegionTypeFull();
        }
        if (null !== $object->getRegionWithType()) {
            $data['region_with_type'] = $object->getRegionWithType();
        }
        if (null !== $object->getSettlement()) {
            $data['settlement'] = $object->getSettlement();
        }
        if (null !== $object->getSettlementFiasId()) {
            $data['settlement_fias_id'] = $object->getSettlementFiasId();
        }
        if (null !== $object->getSettlementKladrId()) {
            $data['settlement_kladr_id'] = $object->getSettlementKladrId();
        }
        if (null !== $object->getSettlementType()) {
            $data['settlement_type'] = $object->getSettlementType();
        }
        if (null !== $object->getSettlementTypeFull()) {
            $data['settlement_type_full'] = $object->getSettlementTypeFull();
        }
        if (null !== $object->getSettlementWithType()) {
            $data['settlement_with_type'] = $object->getSettlementWithType();
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getStreet()) {
            $data['street'] = $object->getStreet();
        }
        if (null !== $object->getStreetFiasId()) {
            $data['street_fias_id'] = $object->getStreetFiasId();
        }
        if (null !== $object->getStreetKladrId()) {
            $data['street_kladr_id'] = $object->getStreetKladrId();
        }
        if (null !== $object->getStreetType()) {
            $data['street_type'] = $object->getStreetType();
        }
        if (null !== $object->getStreetTypeFull()) {
            $data['street_type_full'] = $object->getStreetTypeFull();
        }
        if (null !== $object->getStreetWithType()) {
            $data['street_with_type'] = $object->getStreetWithType();
        }
        if (null !== $object->getTaxOffice()) {
            $data['tax_office'] = $object->getTaxOffice();
        }
        if (null !== $object->getTaxOfficeLegal()) {
            $data['tax_office_legal'] = $object->getTaxOfficeLegal();
        }

        return $data;
    }
}

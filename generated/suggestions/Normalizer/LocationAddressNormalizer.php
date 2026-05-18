<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\LocationAddress;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LocationAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\LocationAddress' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\LocationAddress' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new LocationAddress();
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
        if (\array_key_exists('area_type_full', $data) && null !== $data['area_type_full']) {
            $object->setAreaTypeFull($data['area_type_full']);
        } elseif (\array_key_exists('area_type_full', $data) && null === $data['area_type_full']) {
            $object->setAreaTypeFull(null);
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
        if (\array_key_exists('city_district_type_full', $data) && null !== $data['city_district_type_full']) {
            $object->setCityDistrictTypeFull($data['city_district_type_full']);
        } elseif (\array_key_exists('city_district_type_full', $data) && null === $data['city_district_type_full']) {
            $object->setCityDistrictTypeFull(null);
        }
        if (\array_key_exists('city_fias_id', $data) && null !== $data['city_fias_id']) {
            $object->setCityFiasId($data['city_fias_id']);
        } elseif (\array_key_exists('city_fias_id', $data) && null === $data['city_fias_id']) {
            $object->setCityFiasId(null);
        }
        if (\array_key_exists('city_type_full', $data) && null !== $data['city_type_full']) {
            $object->setCityTypeFull($data['city_type_full']);
        } elseif (\array_key_exists('city_type_full', $data) && null === $data['city_type_full']) {
            $object->setCityTypeFull(null);
        }
        if (\array_key_exists('country', $data) && null !== $data['country']) {
            $object->setCountry($data['country']);
        } elseif (\array_key_exists('country', $data) && null === $data['country']) {
            $object->setCountry(null);
        }
        if (\array_key_exists('country_iso_code', $data) && null !== $data['country_iso_code']) {
            $object->setCountryIsoCode($data['country_iso_code']);
        } elseif (\array_key_exists('country_iso_code', $data) && null === $data['country_iso_code']) {
            $object->setCountryIsoCode(null);
        }
        if (\array_key_exists('fias_id', $data) && null !== $data['fias_id']) {
            $object->setFiasId($data['fias_id']);
        } elseif (\array_key_exists('fias_id', $data) && null === $data['fias_id']) {
            $object->setFiasId(null);
        }
        if (\array_key_exists('kladr_id', $data) && null !== $data['kladr_id']) {
            $object->setKladrId($data['kladr_id']);
        } elseif (\array_key_exists('kladr_id', $data) && null === $data['kladr_id']) {
            $object->setKladrId(null);
        }
        if (\array_key_exists('postal_code', $data) && null !== $data['postal_code']) {
            $object->setPostalCode($data['postal_code']);
        } elseif (\array_key_exists('postal_code', $data) && null === $data['postal_code']) {
            $object->setPostalCode(null);
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
        if (\array_key_exists('region_iso_code', $data) && null !== $data['region_iso_code']) {
            $object->setRegionIsoCode($data['region_iso_code']);
        } elseif (\array_key_exists('region_iso_code', $data) && null === $data['region_iso_code']) {
            $object->setRegionIsoCode(null);
        }
        if (\array_key_exists('region_type_full', $data) && null !== $data['region_type_full']) {
            $object->setRegionTypeFull($data['region_type_full']);
        } elseif (\array_key_exists('region_type_full', $data) && null === $data['region_type_full']) {
            $object->setRegionTypeFull(null);
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
        if (\array_key_exists('settlement_type_full', $data) && null !== $data['settlement_type_full']) {
            $object->setSettlementTypeFull($data['settlement_type_full']);
        } elseif (\array_key_exists('settlement_type_full', $data) && null === $data['settlement_type_full']) {
            $object->setSettlementTypeFull(null);
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
        if (\array_key_exists('street_type_full', $data) && null !== $data['street_type_full']) {
            $object->setStreetTypeFull($data['street_type_full']);
        } elseif (\array_key_exists('street_type_full', $data) && null === $data['street_type_full']) {
            $object->setStreetTypeFull(null);
        }
        if (\array_key_exists('sub_area', $data) && null !== $data['sub_area']) {
            $object->setSubArea($data['sub_area']);
        } elseif (\array_key_exists('sub_area', $data) && null === $data['sub_area']) {
            $object->setSubArea(null);
        }
        if (\array_key_exists('sub_area_fias_id', $data) && null !== $data['sub_area_fias_id']) {
            $object->setSubAreaFiasId($data['sub_area_fias_id']);
        } elseif (\array_key_exists('sub_area_fias_id', $data) && null === $data['sub_area_fias_id']) {
            $object->setSubAreaFiasId(null);
        }
        if (\array_key_exists('sub_area_type_full', $data) && null !== $data['sub_area_type_full']) {
            $object->setSubAreaTypeFull($data['sub_area_type_full']);
        } elseif (\array_key_exists('sub_area_type_full', $data) && null === $data['sub_area_type_full']) {
            $object->setSubAreaTypeFull(null);
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
        if (null !== $object->getAreaTypeFull()) {
            $data['area_type_full'] = $object->getAreaTypeFull();
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
        if (null !== $object->getCityDistrictTypeFull()) {
            $data['city_district_type_full'] = $object->getCityDistrictTypeFull();
        }
        if (null !== $object->getCityFiasId()) {
            $data['city_fias_id'] = $object->getCityFiasId();
        }
        if (null !== $object->getCityTypeFull()) {
            $data['city_type_full'] = $object->getCityTypeFull();
        }
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getCountryIsoCode()) {
            $data['country_iso_code'] = $object->getCountryIsoCode();
        }
        if (null !== $object->getFiasId()) {
            $data['fias_id'] = $object->getFiasId();
        }
        if (null !== $object->getKladrId()) {
            $data['kladr_id'] = $object->getKladrId();
        }
        if (null !== $object->getPostalCode()) {
            $data['postal_code'] = $object->getPostalCode();
        }
        if (null !== $object->getRegion()) {
            $data['region'] = $object->getRegion();
        }
        if (null !== $object->getRegionFiasId()) {
            $data['region_fias_id'] = $object->getRegionFiasId();
        }
        if (null !== $object->getRegionIsoCode()) {
            $data['region_iso_code'] = $object->getRegionIsoCode();
        }
        if (null !== $object->getRegionTypeFull()) {
            $data['region_type_full'] = $object->getRegionTypeFull();
        }
        if (null !== $object->getSettlement()) {
            $data['settlement'] = $object->getSettlement();
        }
        if (null !== $object->getSettlementFiasId()) {
            $data['settlement_fias_id'] = $object->getSettlementFiasId();
        }
        if (null !== $object->getSettlementTypeFull()) {
            $data['settlement_type_full'] = $object->getSettlementTypeFull();
        }
        if (null !== $object->getStreet()) {
            $data['street'] = $object->getStreet();
        }
        if (null !== $object->getStreetFiasId()) {
            $data['street_fias_id'] = $object->getStreetFiasId();
        }
        if (null !== $object->getStreetTypeFull()) {
            $data['street_type_full'] = $object->getStreetTypeFull();
        }
        if (null !== $object->getSubArea()) {
            $data['sub_area'] = $object->getSubArea();
        }
        if (null !== $object->getSubAreaFiasId()) {
            $data['sub_area_fias_id'] = $object->getSubAreaFiasId();
        }
        if (null !== $object->getSubAreaTypeFull()) {
            $data['sub_area_type_full'] = $object->getSubAreaTypeFull();
        }

        return $data;
    }
}

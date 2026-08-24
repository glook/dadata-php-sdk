<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\Address;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\Address' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\Address' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Address();
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
        if (\array_key_exists('beltway_distance', $data) && null !== $data['beltway_distance']) {
            $object->setBeltwayDistance($data['beltway_distance']);
        } elseif (\array_key_exists('beltway_distance', $data) && null === $data['beltway_distance']) {
            $object->setBeltwayDistance(null);
        }
        if (\array_key_exists('beltway_hit', $data) && null !== $data['beltway_hit']) {
            $object->setBeltwayHit($data['beltway_hit']);
        } elseif (\array_key_exists('beltway_hit', $data) && null === $data['beltway_hit']) {
            $object->setBeltwayHit(null);
        }
        if (\array_key_exists('block', $data) && null !== $data['block']) {
            $object->setBlock($data['block']);
        } elseif (\array_key_exists('block', $data) && null === $data['block']) {
            $object->setBlock(null);
        }
        if (\array_key_exists('block_type', $data) && null !== $data['block_type']) {
            $object->setBlockType($data['block_type']);
        } elseif (\array_key_exists('block_type', $data) && null === $data['block_type']) {
            $object->setBlockType(null);
        }
        if (\array_key_exists('block_type_full', $data) && null !== $data['block_type_full']) {
            $object->setBlockTypeFull($data['block_type_full']);
        } elseif (\array_key_exists('block_type_full', $data) && null === $data['block_type_full']) {
            $object->setBlockTypeFull(null);
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
        if (\array_key_exists('city_area', $data) && null !== $data['city_area']) {
            $object->setCityArea($data['city_area']);
        } elseif (\array_key_exists('city_area', $data) && null === $data['city_area']) {
            $object->setCityArea(null);
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
        if (\array_key_exists('custom', $data) && null !== $data['custom']) {
            $values = [];
            foreach ($data['custom'] as $value) {
                $values[] = $value;
            }
            $object->setCustom($values);
        } elseif (\array_key_exists('custom', $data) && null === $data['custom']) {
            $object->setCustom(null);
        }
        if (\array_key_exists('divisions', $data) && null !== $data['divisions']) {
            $object->setDivisions($this->denormalizer->denormalize($data['divisions'], 'Glook\Dadata\Generated\Suggestions\Model\AddressDivisions', 'json', $context));
        } elseif (\array_key_exists('divisions', $data) && null === $data['divisions']) {
            $object->setDivisions(null);
        }
        if (\array_key_exists('entrance', $data) && null !== $data['entrance']) {
            $object->setEntrance($data['entrance']);
        } elseif (\array_key_exists('entrance', $data) && null === $data['entrance']) {
            $object->setEntrance(null);
        }
        if (\array_key_exists('federal_district', $data) && null !== $data['federal_district']) {
            $object->setFederalDistrict($data['federal_district']);
        } elseif (\array_key_exists('federal_district', $data) && null === $data['federal_district']) {
            $object->setFederalDistrict(null);
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
        if (\array_key_exists('flat', $data) && null !== $data['flat']) {
            $object->setFlat($data['flat']);
        } elseif (\array_key_exists('flat', $data) && null === $data['flat']) {
            $object->setFlat(null);
        }
        if (\array_key_exists('flat_area', $data) && null !== $data['flat_area']) {
            $object->setFlatArea($data['flat_area']);
        } elseif (\array_key_exists('flat_area', $data) && null === $data['flat_area']) {
            $object->setFlatArea(null);
        }
        if (\array_key_exists('flat_cadnum', $data) && null !== $data['flat_cadnum']) {
            $object->setFlatCadnum($data['flat_cadnum']);
        } elseif (\array_key_exists('flat_cadnum', $data) && null === $data['flat_cadnum']) {
            $object->setFlatCadnum(null);
        }
        if (\array_key_exists('flat_fias_id', $data) && null !== $data['flat_fias_id']) {
            $object->setFlatFiasId($data['flat_fias_id']);
        } elseif (\array_key_exists('flat_fias_id', $data) && null === $data['flat_fias_id']) {
            $object->setFlatFiasId(null);
        }
        if (\array_key_exists('flat_price', $data) && null !== $data['flat_price']) {
            $object->setFlatPrice($data['flat_price']);
        } elseif (\array_key_exists('flat_price', $data) && null === $data['flat_price']) {
            $object->setFlatPrice(null);
        }
        if (\array_key_exists('flat_type', $data) && null !== $data['flat_type']) {
            $object->setFlatType($data['flat_type']);
        } elseif (\array_key_exists('flat_type', $data) && null === $data['flat_type']) {
            $object->setFlatType(null);
        }
        if (\array_key_exists('flat_type_full', $data) && null !== $data['flat_type_full']) {
            $object->setFlatTypeFull($data['flat_type_full']);
        } elseif (\array_key_exists('flat_type_full', $data) && null === $data['flat_type_full']) {
            $object->setFlatTypeFull(null);
        }
        if (\array_key_exists('floor', $data) && null !== $data['floor']) {
            $object->setFloor($data['floor']);
        } elseif (\array_key_exists('floor', $data) && null === $data['floor']) {
            $object->setFloor(null);
        }
        if (\array_key_exists('geo_lat', $data) && null !== $data['geo_lat']) {
            $object->setGeoLat($data['geo_lat']);
        } elseif (\array_key_exists('geo_lat', $data) && null === $data['geo_lat']) {
            $object->setGeoLat(null);
        }
        if (\array_key_exists('geo_lon', $data) && null !== $data['geo_lon']) {
            $object->setGeoLon($data['geo_lon']);
        } elseif (\array_key_exists('geo_lon', $data) && null === $data['geo_lon']) {
            $object->setGeoLon(null);
        }
        if (\array_key_exists('geoname_id', $data) && null !== $data['geoname_id']) {
            $object->setGeonameId($data['geoname_id']);
        } elseif (\array_key_exists('geoname_id', $data) && null === $data['geoname_id']) {
            $object->setGeonameId(null);
        }
        if (\array_key_exists('history_values', $data) && null !== $data['history_values']) {
            $values_1 = [];
            foreach ($data['history_values'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setHistoryValues($values_1);
        } elseif (\array_key_exists('history_values', $data) && null === $data['history_values']) {
            $object->setHistoryValues(null);
        }
        if (\array_key_exists('house', $data) && null !== $data['house']) {
            $object->setHouse($data['house']);
        } elseif (\array_key_exists('house', $data) && null === $data['house']) {
            $object->setHouse(null);
        }
        if (\array_key_exists('house_cadnum', $data) && null !== $data['house_cadnum']) {
            $object->setHouseCadnum($data['house_cadnum']);
        } elseif (\array_key_exists('house_cadnum', $data) && null === $data['house_cadnum']) {
            $object->setHouseCadnum(null);
        }
        if (\array_key_exists('house_fias_id', $data) && null !== $data['house_fias_id']) {
            $object->setHouseFiasId($data['house_fias_id']);
        } elseif (\array_key_exists('house_fias_id', $data) && null === $data['house_fias_id']) {
            $object->setHouseFiasId(null);
        }
        if (\array_key_exists('house_flat_count', $data) && null !== $data['house_flat_count']) {
            $object->setHouseFlatCount($data['house_flat_count']);
        } elseif (\array_key_exists('house_flat_count', $data) && null === $data['house_flat_count']) {
            $object->setHouseFlatCount(null);
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
        if (\array_key_exists('house_type_full', $data) && null !== $data['house_type_full']) {
            $object->setHouseTypeFull($data['house_type_full']);
        } elseif (\array_key_exists('house_type_full', $data) && null === $data['house_type_full']) {
            $object->setHouseTypeFull(null);
        }
        if (\array_key_exists('kladr_id', $data) && null !== $data['kladr_id']) {
            $object->setKladrId($data['kladr_id']);
        } elseif (\array_key_exists('kladr_id', $data) && null === $data['kladr_id']) {
            $object->setKladrId(null);
        }
        if (\array_key_exists('metro', $data) && null !== $data['metro']) {
            $values_2 = [];
            foreach ($data['metro'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Glook\Dadata\Generated\Suggestions\Model\Metro', 'json', $context);
            }
            $object->setMetro($values_2);
        } elseif (\array_key_exists('metro', $data) && null === $data['metro']) {
            $object->setMetro(null);
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
        if (\array_key_exists('postal_box', $data) && null !== $data['postal_box']) {
            $object->setPostalBox($data['postal_box']);
        } elseif (\array_key_exists('postal_box', $data) && null === $data['postal_box']) {
            $object->setPostalBox(null);
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
        if (\array_key_exists('qc_complete', $data) && null !== $data['qc_complete']) {
            $object->setQcComplete($data['qc_complete']);
        } elseif (\array_key_exists('qc_complete', $data) && null === $data['qc_complete']) {
            $object->setQcComplete(null);
        }
        if (\array_key_exists('qc_geo', $data) && null !== $data['qc_geo']) {
            $object->setQcGeo($data['qc_geo']);
        } elseif (\array_key_exists('qc_geo', $data) && null === $data['qc_geo']) {
            $object->setQcGeo(null);
        }
        if (\array_key_exists('qc_house', $data) && null !== $data['qc_house']) {
            $object->setQcHouse($data['qc_house']);
        } elseif (\array_key_exists('qc_house', $data) && null === $data['qc_house']) {
            $object->setQcHouse(null);
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
        if (\array_key_exists('room', $data) && null !== $data['room']) {
            $object->setRoom($data['room']);
        } elseif (\array_key_exists('room', $data) && null === $data['room']) {
            $object->setRoom(null);
        }
        if (\array_key_exists('room_cadnum', $data) && null !== $data['room_cadnum']) {
            $object->setRoomCadnum($data['room_cadnum']);
        } elseif (\array_key_exists('room_cadnum', $data) && null === $data['room_cadnum']) {
            $object->setRoomCadnum(null);
        }
        if (\array_key_exists('room_fias_id', $data) && null !== $data['room_fias_id']) {
            $object->setRoomFiasId($data['room_fias_id']);
        } elseif (\array_key_exists('room_fias_id', $data) && null === $data['room_fias_id']) {
            $object->setRoomFiasId(null);
        }
        if (\array_key_exists('room_type', $data) && null !== $data['room_type']) {
            $object->setRoomType($data['room_type']);
        } elseif (\array_key_exists('room_type', $data) && null === $data['room_type']) {
            $object->setRoomType(null);
        }
        if (\array_key_exists('room_type_full', $data) && null !== $data['room_type_full']) {
            $object->setRoomTypeFull($data['room_type_full']);
        } elseif (\array_key_exists('room_type_full', $data) && null === $data['room_type_full']) {
            $object->setRoomTypeFull(null);
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
        if (\array_key_exists('square_meter_price', $data) && null !== $data['square_meter_price']) {
            $object->setSquareMeterPrice($data['square_meter_price']);
        } elseif (\array_key_exists('square_meter_price', $data) && null === $data['square_meter_price']) {
            $object->setSquareMeterPrice(null);
        }
        if (\array_key_exists('stead', $data) && null !== $data['stead']) {
            $object->setStead($data['stead']);
        } elseif (\array_key_exists('stead', $data) && null === $data['stead']) {
            $object->setStead(null);
        }
        if (\array_key_exists('stead_cadnum', $data) && null !== $data['stead_cadnum']) {
            $object->setSteadCadnum($data['stead_cadnum']);
        } elseif (\array_key_exists('stead_cadnum', $data) && null === $data['stead_cadnum']) {
            $object->setSteadCadnum(null);
        }
        if (\array_key_exists('stead_fias_id', $data) && null !== $data['stead_fias_id']) {
            $object->setSteadFiasId($data['stead_fias_id']);
        } elseif (\array_key_exists('stead_fias_id', $data) && null === $data['stead_fias_id']) {
            $object->setSteadFiasId(null);
        }
        if (\array_key_exists('stead_type', $data) && null !== $data['stead_type']) {
            $object->setSteadType($data['stead_type']);
        } elseif (\array_key_exists('stead_type', $data) && null === $data['stead_type']) {
            $object->setSteadType(null);
        }
        if (\array_key_exists('stead_type_full', $data) && null !== $data['stead_type_full']) {
            $object->setSteadTypeFull($data['stead_type_full']);
        } elseif (\array_key_exists('stead_type_full', $data) && null === $data['stead_type_full']) {
            $object->setSteadTypeFull(null);
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
        if (\array_key_exists('sub_area_kladr_id', $data) && null !== $data['sub_area_kladr_id']) {
            $object->setSubAreaKladrId($data['sub_area_kladr_id']);
        } elseif (\array_key_exists('sub_area_kladr_id', $data) && null === $data['sub_area_kladr_id']) {
            $object->setSubAreaKladrId(null);
        }
        if (\array_key_exists('sub_area_type', $data) && null !== $data['sub_area_type']) {
            $object->setSubAreaType($data['sub_area_type']);
        } elseif (\array_key_exists('sub_area_type', $data) && null === $data['sub_area_type']) {
            $object->setSubAreaType(null);
        }
        if (\array_key_exists('sub_area_type_full', $data) && null !== $data['sub_area_type_full']) {
            $object->setSubAreaTypeFull($data['sub_area_type_full']);
        } elseif (\array_key_exists('sub_area_type_full', $data) && null === $data['sub_area_type_full']) {
            $object->setSubAreaTypeFull(null);
        }
        if (\array_key_exists('sub_area_with_type', $data) && null !== $data['sub_area_with_type']) {
            $object->setSubAreaWithType($data['sub_area_with_type']);
        } elseif (\array_key_exists('sub_area_with_type', $data) && null === $data['sub_area_with_type']) {
            $object->setSubAreaWithType(null);
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
        if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
            $object->setTimezone($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
            $object->setTimezone(null);
        }
        if (\array_key_exists('unparsed_parts', $data) && null !== $data['unparsed_parts']) {
            $object->setUnparsedParts($data['unparsed_parts']);
        } elseif (\array_key_exists('unparsed_parts', $data) && null === $data['unparsed_parts']) {
            $object->setUnparsedParts(null);
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
        if (null !== $object->getBeltwayDistance()) {
            $data['beltway_distance'] = $object->getBeltwayDistance();
        }
        if (null !== $object->getBeltwayHit()) {
            $data['beltway_hit'] = $object->getBeltwayHit();
        }
        if (null !== $object->getBlock()) {
            $data['block'] = $object->getBlock();
        }
        if (null !== $object->getBlockType()) {
            $data['block_type'] = $object->getBlockType();
        }
        if (null !== $object->getBlockTypeFull()) {
            $data['block_type_full'] = $object->getBlockTypeFull();
        }
        if (null !== $object->getCapitalMarker()) {
            $data['capital_marker'] = $object->getCapitalMarker();
        }
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getCityArea()) {
            $data['city_area'] = $object->getCityArea();
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
        if (null !== $object->getCountry()) {
            $data['country'] = $object->getCountry();
        }
        if (null !== $object->getCountryIsoCode()) {
            $data['country_iso_code'] = $object->getCountryIsoCode();
        }
        if (null !== $object->getCustom()) {
            $values = [];
            foreach ($object->getCustom() as $value) {
                $values[] = $value;
            }
            $data['custom'] = $values;
        }
        if (null !== $object->getDivisions()) {
            $data['divisions'] = $this->normalizer->normalize($object->getDivisions(), 'json', $context);
        }
        if (null !== $object->getEntrance()) {
            $data['entrance'] = $object->getEntrance();
        }
        if (null !== $object->getFederalDistrict()) {
            $data['federal_district'] = $object->getFederalDistrict();
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
        if (null !== $object->getFlat()) {
            $data['flat'] = $object->getFlat();
        }
        if (null !== $object->getFlatArea()) {
            $data['flat_area'] = $object->getFlatArea();
        }
        if (null !== $object->getFlatCadnum()) {
            $data['flat_cadnum'] = $object->getFlatCadnum();
        }
        if (null !== $object->getFlatFiasId()) {
            $data['flat_fias_id'] = $object->getFlatFiasId();
        }
        if (null !== $object->getFlatPrice()) {
            $data['flat_price'] = $object->getFlatPrice();
        }
        if (null !== $object->getFlatType()) {
            $data['flat_type'] = $object->getFlatType();
        }
        if (null !== $object->getFlatTypeFull()) {
            $data['flat_type_full'] = $object->getFlatTypeFull();
        }
        if (null !== $object->getFloor()) {
            $data['floor'] = $object->getFloor();
        }
        if (null !== $object->getGeoLat()) {
            $data['geo_lat'] = $object->getGeoLat();
        }
        if (null !== $object->getGeoLon()) {
            $data['geo_lon'] = $object->getGeoLon();
        }
        if (null !== $object->getGeonameId()) {
            $data['geoname_id'] = $object->getGeonameId();
        }
        if (null !== $object->getHistoryValues()) {
            $values_1 = [];
            foreach ($object->getHistoryValues() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['history_values'] = $values_1;
        }
        if (null !== $object->getHouse()) {
            $data['house'] = $object->getHouse();
        }
        if (null !== $object->getHouseCadnum()) {
            $data['house_cadnum'] = $object->getHouseCadnum();
        }
        if (null !== $object->getHouseFiasId()) {
            $data['house_fias_id'] = $object->getHouseFiasId();
        }
        if (null !== $object->getHouseFlatCount()) {
            $data['house_flat_count'] = $object->getHouseFlatCount();
        }
        if (null !== $object->getHouseKladrId()) {
            $data['house_kladr_id'] = $object->getHouseKladrId();
        }
        if (null !== $object->getHouseType()) {
            $data['house_type'] = $object->getHouseType();
        }
        if (null !== $object->getHouseTypeFull()) {
            $data['house_type_full'] = $object->getHouseTypeFull();
        }
        if (null !== $object->getKladrId()) {
            $data['kladr_id'] = $object->getKladrId();
        }
        if (null !== $object->getMetro()) {
            $values_2 = [];
            foreach ($object->getMetro() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['metro'] = $values_2;
        }
        if (null !== $object->getOkato()) {
            $data['okato'] = $object->getOkato();
        }
        if (null !== $object->getOktmo()) {
            $data['oktmo'] = $object->getOktmo();
        }
        if (null !== $object->getPostalBox()) {
            $data['postal_box'] = $object->getPostalBox();
        }
        if (null !== $object->getPostalCode()) {
            $data['postal_code'] = $object->getPostalCode();
        }
        if (null !== $object->getQc()) {
            $data['qc'] = $object->getQc();
        }
        if (null !== $object->getQcComplete()) {
            $data['qc_complete'] = $object->getQcComplete();
        }
        if (null !== $object->getQcGeo()) {
            $data['qc_geo'] = $object->getQcGeo();
        }
        if (null !== $object->getQcHouse()) {
            $data['qc_house'] = $object->getQcHouse();
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
        if (null !== $object->getRoom()) {
            $data['room'] = $object->getRoom();
        }
        if (null !== $object->getRoomCadnum()) {
            $data['room_cadnum'] = $object->getRoomCadnum();
        }
        if (null !== $object->getRoomFiasId()) {
            $data['room_fias_id'] = $object->getRoomFiasId();
        }
        if (null !== $object->getRoomType()) {
            $data['room_type'] = $object->getRoomType();
        }
        if (null !== $object->getRoomTypeFull()) {
            $data['room_type_full'] = $object->getRoomTypeFull();
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
        if (null !== $object->getSquareMeterPrice()) {
            $data['square_meter_price'] = $object->getSquareMeterPrice();
        }
        if (null !== $object->getStead()) {
            $data['stead'] = $object->getStead();
        }
        if (null !== $object->getSteadCadnum()) {
            $data['stead_cadnum'] = $object->getSteadCadnum();
        }
        if (null !== $object->getSteadFiasId()) {
            $data['stead_fias_id'] = $object->getSteadFiasId();
        }
        if (null !== $object->getSteadType()) {
            $data['stead_type'] = $object->getSteadType();
        }
        if (null !== $object->getSteadTypeFull()) {
            $data['stead_type_full'] = $object->getSteadTypeFull();
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
        if (null !== $object->getSubArea()) {
            $data['sub_area'] = $object->getSubArea();
        }
        if (null !== $object->getSubAreaFiasId()) {
            $data['sub_area_fias_id'] = $object->getSubAreaFiasId();
        }
        if (null !== $object->getSubAreaKladrId()) {
            $data['sub_area_kladr_id'] = $object->getSubAreaKladrId();
        }
        if (null !== $object->getSubAreaType()) {
            $data['sub_area_type'] = $object->getSubAreaType();
        }
        if (null !== $object->getSubAreaTypeFull()) {
            $data['sub_area_type_full'] = $object->getSubAreaTypeFull();
        }
        if (null !== $object->getSubAreaWithType()) {
            $data['sub_area_with_type'] = $object->getSubAreaWithType();
        }
        if (null !== $object->getTaxOffice()) {
            $data['tax_office'] = $object->getTaxOffice();
        }
        if (null !== $object->getTaxOfficeLegal()) {
            $data['tax_office_legal'] = $object->getTaxOfficeLegal();
        }
        if (null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }
        if (null !== $object->getUnparsedParts()) {
            $data['unparsed_parts'] = $object->getUnparsedParts();
        }

        return $data;
    }
}

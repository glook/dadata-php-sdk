<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\LocationGeo;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class LocationGeoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\LocationGeo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\LocationGeo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new LocationGeo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('lat', $data) && null !== $data['lat']) {
            $object->setLat($data['lat']);
        } elseif (\array_key_exists('lat', $data) && null === $data['lat']) {
            $object->setLat(null);
        }
        if (\array_key_exists('lon', $data) && null !== $data['lon']) {
            $object->setLon($data['lon']);
        } elseif (\array_key_exists('lon', $data) && null === $data['lon']) {
            $object->setLon(null);
        }
        if (\array_key_exists('radius_meters', $data) && null !== $data['radius_meters']) {
            $object->setRadiusMeters($data['radius_meters']);
        } elseif (\array_key_exists('radius_meters', $data) && null === $data['radius_meters']) {
            $object->setRadiusMeters(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getLat()) {
            $data['lat'] = $object->getLat();
        }
        if (null !== $object->getLon()) {
            $data['lon'] = $object->getLon();
        }
        if (null !== $object->getRadiusMeters()) {
            $data['radius_meters'] = $object->getRadiusMeters();
        }

        return $data;
    }
}

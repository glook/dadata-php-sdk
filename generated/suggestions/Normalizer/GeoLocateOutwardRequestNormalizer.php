<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\GeoLocateOutwardRequest;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class GeoLocateOutwardRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\GeoLocateOutwardRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\GeoLocateOutwardRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new GeoLocateOutwardRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->setCount($data['count']);
        } elseif (\array_key_exists('count', $data) && null === $data['count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('filters', $data) && null !== $data['filters']) {
            $values = [];
            foreach ($data['filters'] as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setFilters($values);
        } elseif (\array_key_exists('filters', $data) && null === $data['filters']) {
            $object->setFilters(null);
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
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if (null !== $object->getFilters()) {
            $values = [];
            foreach ($object->getFilters() as $value) {
                $values_1 = [];
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['filters'] = $values;
        }
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

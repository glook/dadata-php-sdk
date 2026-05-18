<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\SuggestFiasRequest;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SuggestFiasRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\SuggestFiasRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\SuggestFiasRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SuggestFiasRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->setCount($data['count']);
        } elseif (\array_key_exists('count', $data) && null === $data['count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('from_bound', $data) && null !== $data['from_bound']) {
            $object->setFromBound($this->denormalizer->denormalize($data['from_bound'], 'Glook\Dadata\Generated\Suggestions\Model\Bound', 'json', $context));
        } elseif (\array_key_exists('from_bound', $data) && null === $data['from_bound']) {
            $object->setFromBound(null);
        }
        if (\array_key_exists('locations', $data) && null !== $data['locations']) {
            $values = [];
            foreach ($data['locations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Glook\Dadata\Generated\Suggestions\Model\LocationFias', 'json', $context);
            }
            $object->setLocations($values);
        } elseif (\array_key_exists('locations', $data) && null === $data['locations']) {
            $object->setLocations(null);
        }
        if (\array_key_exists('locations_boost', $data) && null !== $data['locations_boost']) {
            $values_1 = [];
            foreach ($data['locations_boost'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Glook\Dadata\Generated\Suggestions\Model\LocationCode', 'json', $context);
            }
            $object->setLocationsBoost($values_1);
        } elseif (\array_key_exists('locations_boost', $data) && null === $data['locations_boost']) {
            $object->setLocationsBoost(null);
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
        }
        if (\array_key_exists('restrict_value', $data) && null !== $data['restrict_value']) {
            $object->setRestrictValue($data['restrict_value']);
        } elseif (\array_key_exists('restrict_value', $data) && null === $data['restrict_value']) {
            $object->setRestrictValue(null);
        }
        if (\array_key_exists('to_bound', $data) && null !== $data['to_bound']) {
            $object->setToBound($this->denormalizer->denormalize($data['to_bound'], 'Glook\Dadata\Generated\Suggestions\Model\Bound', 'json', $context));
        } elseif (\array_key_exists('to_bound', $data) && null === $data['to_bound']) {
            $object->setToBound(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if (null !== $object->getFromBound()) {
            $data['from_bound'] = $this->normalizer->normalize($object->getFromBound(), 'json', $context);
        }
        if (null !== $object->getLocations()) {
            $values = [];
            foreach ($object->getLocations() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['locations'] = $values;
        }
        if (null !== $object->getLocationsBoost()) {
            $values_1 = [];
            foreach ($object->getLocationsBoost() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['locations_boost'] = $values_1;
        }
        $data['query'] = $object->getQuery();
        if (null !== $object->getRestrictValue()) {
            $data['restrict_value'] = $object->getRestrictValue();
        }
        if (null !== $object->getToBound()) {
            $data['to_bound'] = $this->normalizer->normalize($object->getToBound(), 'json', $context);
        }

        return $data;
    }
}

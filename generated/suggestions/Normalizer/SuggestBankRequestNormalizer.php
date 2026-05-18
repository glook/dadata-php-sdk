<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\SuggestBankRequest;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SuggestBankRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\SuggestBankRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\SuggestBankRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SuggestBankRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->setCount($data['count']);
        } elseif (\array_key_exists('count', $data) && null === $data['count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('locations', $data) && null !== $data['locations']) {
            $values = [];
            foreach ($data['locations'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Glook\Dadata\Generated\Suggestions\Model\LocationCode', 'json', $context);
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
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $values_2 = [];
            foreach ($data['status'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setStatus($values_2);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $values_3 = [];
            foreach ($data['type'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setType($values_3);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
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
        if (null !== $object->getStatus()) {
            $values_2 = [];
            foreach ($object->getStatus() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['status'] = $values_2;
        }
        if (null !== $object->getType()) {
            $values_3 = [];
            foreach ($object->getType() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['type'] = $values_3;
        }

        return $data;
    }
}

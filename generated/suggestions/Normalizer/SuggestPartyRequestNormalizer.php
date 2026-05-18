<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\SuggestPartyRequest;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SuggestPartyRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\SuggestPartyRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\SuggestPartyRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SuggestPartyRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch_type', $data) && null !== $data['branch_type']) {
            $values = [];
            foreach ($data['branch_type'] as $value) {
                $values[] = $value;
            }
            $object->setBranchType($values);
        } elseif (\array_key_exists('branch_type', $data) && null === $data['branch_type']) {
            $object->setBranchType(null);
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->setCount($data['count']);
        } elseif (\array_key_exists('count', $data) && null === $data['count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('locations', $data) && null !== $data['locations']) {
            $values_1 = [];
            foreach ($data['locations'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Glook\Dadata\Generated\Suggestions\Model\LocationCode', 'json', $context);
            }
            $object->setLocations($values_1);
        } elseif (\array_key_exists('locations', $data) && null === $data['locations']) {
            $object->setLocations(null);
        }
        if (\array_key_exists('locations_boost', $data) && null !== $data['locations_boost']) {
            $values_2 = [];
            foreach ($data['locations_boost'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Glook\Dadata\Generated\Suggestions\Model\LocationCode', 'json', $context);
            }
            $object->setLocationsBoost($values_2);
        } elseif (\array_key_exists('locations_boost', $data) && null === $data['locations_boost']) {
            $object->setLocationsBoost(null);
        }
        if (\array_key_exists('okved', $data) && null !== $data['okved']) {
            $values_3 = [];
            foreach ($data['okved'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setOkved($values_3);
        } elseif (\array_key_exists('okved', $data) && null === $data['okved']) {
            $object->setOkved(null);
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $values_4 = [];
            foreach ($data['status'] as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setStatus($values_4);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBranchType()) {
            $values = [];
            foreach ($object->getBranchType() as $value) {
                $values[] = $value;
            }
            $data['branch_type'] = $values;
        }
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if (null !== $object->getLocations()) {
            $values_1 = [];
            foreach ($object->getLocations() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['locations'] = $values_1;
        }
        if (null !== $object->getLocationsBoost()) {
            $values_2 = [];
            foreach ($object->getLocationsBoost() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['locations_boost'] = $values_2;
        }
        if (null !== $object->getOkved()) {
            $values_3 = [];
            foreach ($object->getOkved() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['okved'] = $values_3;
        }
        $data['query'] = $object->getQuery();
        if (null !== $object->getStatus()) {
            $values_4 = [];
            foreach ($object->getStatus() as $value_4) {
                $values_4[] = $value_4;
            }
            $data['status'] = $values_4;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        return $data;
    }
}

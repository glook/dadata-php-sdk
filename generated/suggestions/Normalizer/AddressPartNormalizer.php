<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\AddressPart;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AddressPartNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\AddressPart' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\AddressPart' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new AddressPart();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('name_with_type', $data) && null !== $data['name_with_type']) {
            $object->setNameWithType($data['name_with_type']);
        } elseif (\array_key_exists('name_with_type', $data) && null === $data['name_with_type']) {
            $object->setNameWithType(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('type_full', $data) && null !== $data['type_full']) {
            $object->setTypeFull($data['type_full']);
        } elseif (\array_key_exists('type_full', $data) && null === $data['type_full']) {
            $object->setTypeFull(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFiasId()) {
            $data['fias_id'] = $object->getFiasId();
        }
        if (null !== $object->getKladrId()) {
            $data['kladr_id'] = $object->getKladrId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getNameWithType()) {
            $data['name_with_type'] = $object->getNameWithType();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getTypeFull()) {
            $data['type_full'] = $object->getTypeFull();
        }

        return $data;
    }
}

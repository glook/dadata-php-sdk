<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\PartyName;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PartyNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\PartyName' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\PartyName' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PartyName();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('full_value', $data) && null !== $data['full_value']) {
            $object->setFullValue($data['full_value']);
        } elseif (\array_key_exists('full_value', $data) && null === $data['full_value']) {
            $object->setFullValue(null);
        }
        if (\array_key_exists('full_with_opf', $data) && null !== $data['full_with_opf']) {
            $object->setFullWithOpf($data['full_with_opf']);
        } elseif (\array_key_exists('full_with_opf', $data) && null === $data['full_with_opf']) {
            $object->setFullWithOpf(null);
        }
        if (\array_key_exists('latin', $data) && null !== $data['latin']) {
            $object->setLatin($data['latin']);
        } elseif (\array_key_exists('latin', $data) && null === $data['latin']) {
            $object->setLatin(null);
        }
        if (\array_key_exists('short_value', $data) && null !== $data['short_value']) {
            $object->setShortValue($data['short_value']);
        } elseif (\array_key_exists('short_value', $data) && null === $data['short_value']) {
            $object->setShortValue(null);
        }
        if (\array_key_exists('short_with_opf', $data) && null !== $data['short_with_opf']) {
            $object->setShortWithOpf($data['short_with_opf']);
        } elseif (\array_key_exists('short_with_opf', $data) && null === $data['short_with_opf']) {
            $object->setShortWithOpf(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFullValue()) {
            $data['full_value'] = $object->getFullValue();
        }
        if (null !== $object->getFullWithOpf()) {
            $data['full_with_opf'] = $object->getFullWithOpf();
        }
        if (null !== $object->getLatin()) {
            $data['latin'] = $object->getLatin();
        }
        if (null !== $object->getShortValue()) {
            $data['short_value'] = $object->getShortValue();
        }
        if (null !== $object->getShortWithOpf()) {
            $data['short_with_opf'] = $object->getShortWithOpf();
        }

        return $data;
    }
}

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
        if (\array_key_exists('full', $data) && null !== $data['full']) {
            $object->setFull($data['full']);
        } elseif (\array_key_exists('full', $data) && null === $data['full']) {
            $object->setFull(null);
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
        if (\array_key_exists('short', $data) && null !== $data['short']) {
            $object->setShort($data['short']);
        } elseif (\array_key_exists('short', $data) && null === $data['short']) {
            $object->setShort(null);
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
        if (null !== $object->getFull()) {
            $data['full'] = $object->getFull();
        }
        if (null !== $object->getFullWithOpf()) {
            $data['full_with_opf'] = $object->getFullWithOpf();
        }
        if (null !== $object->getLatin()) {
            $data['latin'] = $object->getLatin();
        }
        if (null !== $object->getShort()) {
            $data['short'] = $object->getShort();
        }
        if (null !== $object->getShortWithOpf()) {
            $data['short_with_opf'] = $object->getShortWithOpf();
        }

        return $data;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\FounderParty;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FounderPartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\FounderParty' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\FounderParty' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new FounderParty();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('hid', $data) && null !== $data['hid']) {
            $object->setHid($data['hid']);
        } elseif (\array_key_exists('hid', $data) && null === $data['hid']) {
            $object->setHid(null);
        }
        if (\array_key_exists('invalidity', $data)) {
            $object->setInvalidity($this->denormalizer->denormalize($data['invalidity'], 'Glook\Dadata\Generated\Suggestions\Model\PartyInvalidity', 'json', $context));
        }
        if (\array_key_exists('share', $data)) {
            $object->setShare($data['share']);
        }
        if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
            $object->setStartDate($data['start_date']);
        } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
            $object->setStartDate(null);
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
        if (null !== $object->getHid()) {
            $data['hid'] = $object->getHid();
        }
        if (null !== $object->getInvalidity()) {
            $data['invalidity'] = $this->normalizer->normalize($object->getInvalidity(), 'json', $context);
        }
        if (null !== $object->getShare()) {
            $data['share'] = $object->getShare();
        }
        if (null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        return $data;
    }
}

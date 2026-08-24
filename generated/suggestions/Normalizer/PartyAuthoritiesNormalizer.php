<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\PartyAuthorities;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PartyAuthoritiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\PartyAuthorities' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\PartyAuthorities' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PartyAuthorities();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fts_registration', $data) && null !== $data['fts_registration']) {
            $object->setFtsRegistration($this->denormalizer->denormalize($data['fts_registration'], 'Glook\Dadata\Generated\Suggestions\Model\PartyAuthority', 'json', $context));
        } elseif (\array_key_exists('fts_registration', $data) && null === $data['fts_registration']) {
            $object->setFtsRegistration(null);
        }
        if (\array_key_exists('fts_report', $data) && null !== $data['fts_report']) {
            $object->setFtsReport($this->denormalizer->denormalize($data['fts_report'], 'Glook\Dadata\Generated\Suggestions\Model\PartyAuthority', 'json', $context));
        } elseif (\array_key_exists('fts_report', $data) && null === $data['fts_report']) {
            $object->setFtsReport(null);
        }
        if (\array_key_exists('pf', $data) && null !== $data['pf']) {
            $object->setPf($this->denormalizer->denormalize($data['pf'], 'Glook\Dadata\Generated\Suggestions\Model\PartyAuthority', 'json', $context));
        } elseif (\array_key_exists('pf', $data) && null === $data['pf']) {
            $object->setPf(null);
        }
        if (\array_key_exists('sif', $data) && null !== $data['sif']) {
            $object->setSif($this->denormalizer->denormalize($data['sif'], 'Glook\Dadata\Generated\Suggestions\Model\PartyAuthority', 'json', $context));
        } elseif (\array_key_exists('sif', $data) && null === $data['sif']) {
            $object->setSif(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFtsRegistration()) {
            $data['fts_registration'] = $this->normalizer->normalize($object->getFtsRegistration(), 'json', $context);
        }
        if (null !== $object->getFtsReport()) {
            $data['fts_report'] = $this->normalizer->normalize($object->getFtsReport(), 'json', $context);
        }
        if (null !== $object->getPf()) {
            $data['pf'] = $this->normalizer->normalize($object->getPf(), 'json', $context);
        }
        if (null !== $object->getSif()) {
            $data['sif'] = $this->normalizer->normalize($object->getSif(), 'json', $context);
        }

        return $data;
    }
}

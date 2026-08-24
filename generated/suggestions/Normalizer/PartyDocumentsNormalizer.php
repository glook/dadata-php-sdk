<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\PartyDocuments;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PartyDocumentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\PartyDocuments' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\PartyDocuments' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PartyDocuments();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('fts_registration', $data) && null !== $data['fts_registration']) {
            $object->setFtsRegistration($this->denormalizer->denormalize($data['fts_registration'], 'Glook\Dadata\Generated\Suggestions\Model\PartyDocument', 'json', $context));
        } elseif (\array_key_exists('fts_registration', $data) && null === $data['fts_registration']) {
            $object->setFtsRegistration(null);
        }
        if (\array_key_exists('fts_report', $data)) {
            $object->setFtsReport($this->denormalizer->denormalize($data['fts_report'], 'Glook\Dadata\Generated\Suggestions\Model\PartyDocument', 'json', $context));
        }
        if (\array_key_exists('pf_registration', $data) && null !== $data['pf_registration']) {
            $object->setPfRegistration($this->denormalizer->denormalize($data['pf_registration'], 'Glook\Dadata\Generated\Suggestions\Model\PartyDocument', 'json', $context));
        } elseif (\array_key_exists('pf_registration', $data) && null === $data['pf_registration']) {
            $object->setPfRegistration(null);
        }
        if (\array_key_exists('sif_registration', $data) && null !== $data['sif_registration']) {
            $object->setSifRegistration($this->denormalizer->denormalize($data['sif_registration'], 'Glook\Dadata\Generated\Suggestions\Model\PartyDocument', 'json', $context));
        } elseif (\array_key_exists('sif_registration', $data) && null === $data['sif_registration']) {
            $object->setSifRegistration(null);
        }
        if (\array_key_exists('smb', $data) && null !== $data['smb']) {
            $object->setSmb($this->denormalizer->denormalize($data['smb'], 'Glook\Dadata\Generated\Suggestions\Model\PartySmbDocument', 'json', $context));
        } elseif (\array_key_exists('smb', $data) && null === $data['smb']) {
            $object->setSmb(null);
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
        if (null !== $object->getPfRegistration()) {
            $data['pf_registration'] = $this->normalizer->normalize($object->getPfRegistration(), 'json', $context);
        }
        if (null !== $object->getSifRegistration()) {
            $data['sif_registration'] = $this->normalizer->normalize($object->getSifRegistration(), 'json', $context);
        }
        if (null !== $object->getSmb()) {
            $data['smb'] = $this->normalizer->normalize($object->getSmb(), 'json', $context);
        }

        return $data;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\DeliveryData;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeliveryDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\DeliveryData' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\DeliveryData' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new DeliveryData();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('kladr_id', $data) && null !== $data['kladr_id']) {
            $object->setKladrId($data['kladr_id']);
        } elseif (\array_key_exists('kladr_id', $data) && null === $data['kladr_id']) {
            $object->setKladrId(null);
        }
        if (\array_key_exists('fias_id', $data) && null !== $data['fias_id']) {
            $object->setFiasId($data['fias_id']);
        } elseif (\array_key_exists('fias_id', $data) && null === $data['fias_id']) {
            $object->setFiasId(null);
        }
        if (\array_key_exists('boxberry_id', $data) && null !== $data['boxberry_id']) {
            $object->setBoxberryId($data['boxberry_id']);
        } elseif (\array_key_exists('boxberry_id', $data) && null === $data['boxberry_id']) {
            $object->setBoxberryId(null);
        }
        if (\array_key_exists('cdek_id', $data) && null !== $data['cdek_id']) {
            $object->setCdekId($data['cdek_id']);
        } elseif (\array_key_exists('cdek_id', $data) && null === $data['cdek_id']) {
            $object->setCdekId(null);
        }
        if (\array_key_exists('dpd_id', $data) && null !== $data['dpd_id']) {
            $object->setDpdId($data['dpd_id']);
        } elseif (\array_key_exists('dpd_id', $data) && null === $data['dpd_id']) {
            $object->setDpdId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getKladrId()) {
            $data['kladr_id'] = $object->getKladrId();
        }
        if (null !== $object->getFiasId()) {
            $data['fias_id'] = $object->getFiasId();
        }
        if (null !== $object->getBoxberryId()) {
            $data['boxberry_id'] = $object->getBoxberryId();
        }
        if (null !== $object->getCdekId()) {
            $data['cdek_id'] = $object->getCdekId();
        }
        if (null !== $object->getDpdId()) {
            $data['dpd_id'] = $object->getDpdId();
        }

        return $data;
    }
}

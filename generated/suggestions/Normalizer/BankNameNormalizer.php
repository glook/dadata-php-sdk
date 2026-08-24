<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\BankName;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BankNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\BankName' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\BankName' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BankName();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('full', $data) && null !== $data['full']) {
            $object->setFull($data['full']);
        } elseif (\array_key_exists('full', $data) && null === $data['full']) {
            $object->setFull(null);
        }
        if (\array_key_exists('payment', $data) && null !== $data['payment']) {
            $object->setPayment($data['payment']);
        } elseif (\array_key_exists('payment', $data) && null === $data['payment']) {
            $object->setPayment(null);
        }
        if (\array_key_exists('short', $data) && null !== $data['short']) {
            $object->setShort($data['short']);
        } elseif (\array_key_exists('short', $data) && null === $data['short']) {
            $object->setShort(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFull()) {
            $data['full'] = $object->getFull();
        }
        if (null !== $object->getPayment()) {
            $data['payment'] = $object->getPayment();
        }
        if (null !== $object->getShort()) {
            $data['short'] = $object->getShort();
        }

        return $data;
    }
}

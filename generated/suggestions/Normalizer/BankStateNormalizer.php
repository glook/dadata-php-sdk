<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\BankState;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BankStateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\BankState' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\BankState' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BankState();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('actuality_date', $data) && null !== $data['actuality_date']) {
            $object->setActualityDate($data['actuality_date']);
        } elseif (\array_key_exists('actuality_date', $data) && null === $data['actuality_date']) {
            $object->setActualityDate(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('liquidation_date', $data) && null !== $data['liquidation_date']) {
            $object->setLiquidationDate($data['liquidation_date']);
        } elseif (\array_key_exists('liquidation_date', $data) && null === $data['liquidation_date']) {
            $object->setLiquidationDate(null);
        }
        if (\array_key_exists('registration_date', $data) && null !== $data['registration_date']) {
            $object->setRegistrationDate($data['registration_date']);
        } elseif (\array_key_exists('registration_date', $data) && null === $data['registration_date']) {
            $object->setRegistrationDate(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getActualityDate()) {
            $data['actuality_date'] = $object->getActualityDate();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getLiquidationDate()) {
            $data['liquidation_date'] = $object->getLiquidationDate();
        }
        if (null !== $object->getRegistrationDate()) {
            $data['registration_date'] = $object->getRegistrationDate();
        }
        $data['status'] = $object->getStatus();

        return $data;
    }
}

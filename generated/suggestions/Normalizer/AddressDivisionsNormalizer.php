<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\AddressDivisions;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AddressDivisionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\AddressDivisions' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\AddressDivisions' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new AddressDivisions();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('administrative', $data)) {
            $object->setAdministrative($this->denormalizer->denormalize($data['administrative'], 'Glook\Dadata\Generated\Suggestions\Model\AdministrativeDivision', 'json', $context));
        }
        if (\array_key_exists('municipal', $data)) {
            $object->setMunicipal($this->denormalizer->denormalize($data['municipal'], 'Glook\Dadata\Generated\Suggestions\Model\MunicipalDivision', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAdministrative()) {
            $data['administrative'] = $this->normalizer->normalize($object->getAdministrative(), 'json', $context);
        }
        if (null !== $object->getMunicipal()) {
            $data['municipal'] = $this->normalizer->normalize($object->getMunicipal(), 'json', $context);
        }

        return $data;
    }
}

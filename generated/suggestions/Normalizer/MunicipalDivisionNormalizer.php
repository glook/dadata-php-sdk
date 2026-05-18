<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\MunicipalDivision;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MunicipalDivisionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\MunicipalDivision' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\MunicipalDivision' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new MunicipalDivision();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('area', $data)) {
            $object->setArea($this->denormalizer->denormalize($data['area'], 'Glook\Dadata\Generated\Suggestions\Model\AddressPart', 'json', $context));
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($this->denormalizer->denormalize($data['city'], 'Glook\Dadata\Generated\Suggestions\Model\AddressPart', 'json', $context));
        }
        if (\array_key_exists('planning_structure', $data)) {
            $object->setPlanningStructure($this->denormalizer->denormalize($data['planning_structure'], 'Glook\Dadata\Generated\Suggestions\Model\AddressPart', 'json', $context));
        }
        if (\array_key_exists('settlement', $data)) {
            $object->setSettlement($this->denormalizer->denormalize($data['settlement'], 'Glook\Dadata\Generated\Suggestions\Model\AddressPart', 'json', $context));
        }
        if (\array_key_exists('sub_area', $data)) {
            $object->setSubArea($this->denormalizer->denormalize($data['sub_area'], 'Glook\Dadata\Generated\Suggestions\Model\AddressPart', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getArea()) {
            $data['area'] = $this->normalizer->normalize($object->getArea(), 'json', $context);
        }
        if (null !== $object->getCity()) {
            $data['city'] = $this->normalizer->normalize($object->getCity(), 'json', $context);
        }
        if (null !== $object->getPlanningStructure()) {
            $data['planning_structure'] = $this->normalizer->normalize($object->getPlanningStructure(), 'json', $context);
        }
        if (null !== $object->getSettlement()) {
            $data['settlement'] = $this->normalizer->normalize($object->getSettlement(), 'json', $context);
        }
        if (null !== $object->getSubArea()) {
            $data['sub_area'] = $this->normalizer->normalize($object->getSubArea(), 'json', $context);
        }

        return $data;
    }
}

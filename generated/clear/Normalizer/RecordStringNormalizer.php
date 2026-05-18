<?php

namespace Glook\Dadata\Generated\Clear\Normalizer;

use Glook\Dadata\Generated\Clear\Model\RecordString;
use Glook\Dadata\Generated\Clear\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecordStringNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Clear\Model\RecordString' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Clear\Model\RecordString' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new RecordString();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('structure', $data)) {
            $values = [];
            foreach ($data['structure'] as $value) {
                $values[] = $value;
            }
            $object->setStructure($values);
        }
        if (\array_key_exists('data', $data)) {
            $values_1 = [];
            foreach ($data['data'] as $value_1) {
                $values_2 = [];
                foreach ($value_1 as $value_2) {
                    $values_2[] = $value_2;
                }
                $values_1[] = $values_2;
            }
            $object->setData($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getStructure() as $value) {
            $values[] = $value;
        }
        $data['structure'] = $values;
        $values_1 = [];
        foreach ($object->getData() as $value_1) {
            $values_2 = [];
            foreach ($value_1 as $value_2) {
                $values_2[] = $value_2;
            }
            $values_1[] = $values_2;
        }
        $data['data'] = $values_1;

        return $data;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\FinanceHistoryItem;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FinanceHistoryItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\FinanceHistoryItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\FinanceHistoryItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new FinanceHistoryItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('year', $data) && null !== $data['year']) {
            $object->setYear($data['year']);
        } elseif (\array_key_exists('year', $data) && null === $data['year']) {
            $object->setYear(null);
        }
        if (\array_key_exists('metrics', $data) && null !== $data['metrics']) {
            $values = [];
            foreach ($data['metrics'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Glook\Dadata\Generated\Suggestions\Model\FinanceMetric', 'json', $context);
            }
            $object->setMetrics($values);
        } elseif (\array_key_exists('metrics', $data) && null === $data['metrics']) {
            $object->setMetrics(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getYear()) {
            $data['year'] = $object->getYear();
        }
        if (null !== $object->getMetrics()) {
            $values = [];
            foreach ($object->getMetrics() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['metrics'] = $values;
        }

        return $data;
    }
}

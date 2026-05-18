<?php

namespace Glook\Dadata\Generated\Clear\Normalizer;

use Glook\Dadata\Generated\Clear\Model\Vehicle;
use Glook\Dadata\Generated\Clear\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class VehicleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Clear\Model\Vehicle' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Clear\Model\Vehicle' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Vehicle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('source', $data) && null !== $data['source']) {
            $object->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && null === $data['source']) {
            $object->setSource(null);
        }
        if (\array_key_exists('result', $data) && null !== $data['result']) {
            $object->setResult($data['result']);
        } elseif (\array_key_exists('result', $data) && null === $data['result']) {
            $object->setResult(null);
        }
        if (\array_key_exists('brand', $data) && null !== $data['brand']) {
            $object->setBrand($data['brand']);
        } elseif (\array_key_exists('brand', $data) && null === $data['brand']) {
            $object->setBrand(null);
        }
        if (\array_key_exists('model', $data) && null !== $data['model']) {
            $object->setModel($data['model']);
        } elseif (\array_key_exists('model', $data) && null === $data['model']) {
            $object->setModel(null);
        }
        if (\array_key_exists('qc', $data) && null !== $data['qc']) {
            $object->setQc($data['qc']);
        } elseif (\array_key_exists('qc', $data) && null === $data['qc']) {
            $object->setQc(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getResult()) {
            $data['result'] = $object->getResult();
        }
        if (null !== $object->getBrand()) {
            $data['brand'] = $object->getBrand();
        }
        if (null !== $object->getModel()) {
            $data['model'] = $object->getModel();
        }
        if (null !== $object->getQc()) {
            $data['qc'] = $object->getQc();
        }

        return $data;
    }
}

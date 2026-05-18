<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\FindAddressByIdRequest;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class FindAddressByIdRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\FindAddressByIdRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\FindAddressByIdRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new FindAddressByIdRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('count', $data) && null !== $data['count']) {
            $object->setCount($data['count']);
        } elseif (\array_key_exists('count', $data) && null === $data['count']) {
            $object->setCount(null);
        }
        if (\array_key_exists('division', $data) && null !== $data['division']) {
            $object->setDivision($data['division']);
        } elseif (\array_key_exists('division', $data) && null === $data['division']) {
            $object->setDivision(null);
        }
        if (\array_key_exists('from_bound', $data) && null !== $data['from_bound']) {
            $object->setFromBound($this->denormalizer->denormalize($data['from_bound'], 'Glook\Dadata\Generated\Suggestions\Model\Bound', 'json', $context));
        } elseif (\array_key_exists('from_bound', $data) && null === $data['from_bound']) {
            $object->setFromBound(null);
        }
        if (\array_key_exists('language', $data) && null !== $data['language']) {
            $object->setLanguage($data['language']);
        } elseif (\array_key_exists('language', $data) && null === $data['language']) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('query', $data)) {
            $object->setQuery($data['query']);
        }
        if (\array_key_exists('to_bound', $data) && null !== $data['to_bound']) {
            $object->setToBound($this->denormalizer->denormalize($data['to_bound'], 'Glook\Dadata\Generated\Suggestions\Model\Bound', 'json', $context));
        } elseif (\array_key_exists('to_bound', $data) && null === $data['to_bound']) {
            $object->setToBound(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCount()) {
            $data['count'] = $object->getCount();
        }
        if (null !== $object->getDivision()) {
            $data['division'] = $object->getDivision();
        }
        if (null !== $object->getFromBound()) {
            $data['from_bound'] = $this->normalizer->normalize($object->getFromBound(), 'json', $context);
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        $data['query'] = $object->getQuery();
        if (null !== $object->getToBound()) {
            $data['to_bound'] = $this->normalizer->normalize($object->getToBound(), 'json', $context);
        }

        return $data;
    }
}

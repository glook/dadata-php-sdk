<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\PartyManagement;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PartyManagementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\PartyManagement' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\PartyManagement' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PartyManagement();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('disqualified', $data) && null !== $data['disqualified']) {
            $object->setDisqualified($data['disqualified']);
        } elseif (\array_key_exists('disqualified', $data) && null === $data['disqualified']) {
            $object->setDisqualified(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('post', $data) && null !== $data['post']) {
            $object->setPost($data['post']);
        } elseif (\array_key_exists('post', $data) && null === $data['post']) {
            $object->setPost(null);
        }
        if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
            $object->setStartDate($data['start_date']);
        } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
            $object->setStartDate(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDisqualified()) {
            $data['disqualified'] = $object->getDisqualified();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPost()) {
            $data['post'] = $object->getPost();
        }
        if (null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate();
        }

        return $data;
    }
}

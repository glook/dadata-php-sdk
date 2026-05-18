<?php

namespace Glook\Dadata\Generated\Clear\Normalizer;

use Glook\Dadata\Generated\Clear\Model\Name;
use Glook\Dadata\Generated\Clear\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Clear\Model\Name' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Clear\Model\Name' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Name();
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
        if (\array_key_exists('result_genitive', $data) && null !== $data['result_genitive']) {
            $object->setResultGenitive($data['result_genitive']);
        } elseif (\array_key_exists('result_genitive', $data) && null === $data['result_genitive']) {
            $object->setResultGenitive(null);
        }
        if (\array_key_exists('result_dative', $data) && null !== $data['result_dative']) {
            $object->setResultDative($data['result_dative']);
        } elseif (\array_key_exists('result_dative', $data) && null === $data['result_dative']) {
            $object->setResultDative(null);
        }
        if (\array_key_exists('result_ablative', $data) && null !== $data['result_ablative']) {
            $object->setResultAblative($data['result_ablative']);
        } elseif (\array_key_exists('result_ablative', $data) && null === $data['result_ablative']) {
            $object->setResultAblative(null);
        }
        if (\array_key_exists('surname', $data) && null !== $data['surname']) {
            $object->setSurname($data['surname']);
        } elseif (\array_key_exists('surname', $data) && null === $data['surname']) {
            $object->setSurname(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('patronymic', $data) && null !== $data['patronymic']) {
            $object->setPatronymic($data['patronymic']);
        } elseif (\array_key_exists('patronymic', $data) && null === $data['patronymic']) {
            $object->setPatronymic(null);
        }
        if (\array_key_exists('gender', $data) && null !== $data['gender']) {
            $object->setGender($data['gender']);
        } elseif (\array_key_exists('gender', $data) && null === $data['gender']) {
            $object->setGender(null);
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
        if (null !== $object->getResultGenitive()) {
            $data['result_genitive'] = $object->getResultGenitive();
        }
        if (null !== $object->getResultDative()) {
            $data['result_dative'] = $object->getResultDative();
        }
        if (null !== $object->getResultAblative()) {
            $data['result_ablative'] = $object->getResultAblative();
        }
        if (null !== $object->getSurname()) {
            $data['surname'] = $object->getSurname();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getPatronymic()) {
            $data['patronymic'] = $object->getPatronymic();
        }
        if (null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if (null !== $object->getQc()) {
            $data['qc'] = $object->getQc();
        }

        return $data;
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\Company;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompanyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\Company' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\Company' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Company();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('city', $data) && null !== $data['city']) {
            $object->setCity($data['city']);
        } elseif (\array_key_exists('city', $data) && null === $data['city']) {
            $object->setCity(null);
        }
        if (\array_key_exists('domain', $data) && null !== $data['domain']) {
            $object->setDomain($data['domain']);
        } elseif (\array_key_exists('domain', $data) && null === $data['domain']) {
            $object->setDomain(null);
        }
        if (\array_key_exists('employee_count', $data) && null !== $data['employee_count']) {
            $object->setEmployeeCount($data['employee_count']);
        } elseif (\array_key_exists('employee_count', $data) && null === $data['employee_count']) {
            $object->setEmployeeCount(null);
        }
        if (\array_key_exists('income', $data) && null !== $data['income']) {
            $object->setIncome($data['income']);
        } elseif (\array_key_exists('income', $data) && null === $data['income']) {
            $object->setIncome(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('ogrn', $data) && null !== $data['ogrn']) {
            $object->setOgrn($data['ogrn']);
        } elseif (\array_key_exists('ogrn', $data) && null === $data['ogrn']) {
            $object->setOgrn(null);
        }
        if (\array_key_exists('okved', $data) && null !== $data['okved']) {
            $object->setOkved($data['okved']);
        } elseif (\array_key_exists('okved', $data) && null === $data['okved']) {
            $object->setOkved(null);
        }
        if (\array_key_exists('okved_name', $data) && null !== $data['okved_name']) {
            $object->setOkvedName($data['okved_name']);
        } elseif (\array_key_exists('okved_name', $data) && null === $data['okved_name']) {
            $object->setOkvedName(null);
        }
        if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
            $object->setTimezone($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
            $object->setTimezone(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCity()) {
            $data['city'] = $object->getCity();
        }
        if (null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if (null !== $object->getEmployeeCount()) {
            $data['employee_count'] = $object->getEmployeeCount();
        }
        if (null !== $object->getIncome()) {
            $data['income'] = $object->getIncome();
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getOgrn()) {
            $data['ogrn'] = $object->getOgrn();
        }
        if (null !== $object->getOkved()) {
            $data['okved'] = $object->getOkved();
        }
        if (null !== $object->getOkvedName()) {
            $data['okved_name'] = $object->getOkvedName();
        }
        if (null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }

        return $data;
    }
}

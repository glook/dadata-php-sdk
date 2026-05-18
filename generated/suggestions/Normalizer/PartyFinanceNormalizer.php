<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\PartyFinance;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PartyFinanceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\PartyFinance' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\PartyFinance' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PartyFinance();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('debt', $data) && null !== $data['debt']) {
            $object->setDebt($data['debt']);
        } elseif (\array_key_exists('debt', $data) && null === $data['debt']) {
            $object->setDebt(null);
        }
        if (\array_key_exists('expense', $data) && null !== $data['expense']) {
            $object->setExpense($data['expense']);
        } elseif (\array_key_exists('expense', $data) && null === $data['expense']) {
            $object->setExpense(null);
        }
        if (\array_key_exists('income', $data) && null !== $data['income']) {
            $object->setIncome($data['income']);
        } elseif (\array_key_exists('income', $data) && null === $data['income']) {
            $object->setIncome(null);
        }
        if (\array_key_exists('penalty', $data) && null !== $data['penalty']) {
            $object->setPenalty($data['penalty']);
        } elseif (\array_key_exists('penalty', $data) && null === $data['penalty']) {
            $object->setPenalty(null);
        }
        if (\array_key_exists('revenue', $data) && null !== $data['revenue']) {
            $object->setRevenue($data['revenue']);
        } elseif (\array_key_exists('revenue', $data) && null === $data['revenue']) {
            $object->setRevenue(null);
        }
        if (\array_key_exists('tax_system', $data) && null !== $data['tax_system']) {
            $object->setTaxSystem($data['tax_system']);
        } elseif (\array_key_exists('tax_system', $data) && null === $data['tax_system']) {
            $object->setTaxSystem(null);
        }
        if (\array_key_exists('year', $data) && null !== $data['year']) {
            $object->setYear($data['year']);
        } elseif (\array_key_exists('year', $data) && null === $data['year']) {
            $object->setYear(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDebt()) {
            $data['debt'] = $object->getDebt();
        }
        if (null !== $object->getExpense()) {
            $data['expense'] = $object->getExpense();
        }
        if (null !== $object->getIncome()) {
            $data['income'] = $object->getIncome();
        }
        if (null !== $object->getPenalty()) {
            $data['penalty'] = $object->getPenalty();
        }
        if (null !== $object->getRevenue()) {
            $data['revenue'] = $object->getRevenue();
        }
        if (null !== $object->getTaxSystem()) {
            $data['tax_system'] = $object->getTaxSystem();
        }
        if (null !== $object->getYear()) {
            $data['year'] = $object->getYear();
        }

        return $data;
    }
}

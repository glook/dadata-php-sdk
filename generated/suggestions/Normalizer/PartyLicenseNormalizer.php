<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\PartyLicense;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PartyLicenseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\PartyLicense' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\PartyLicense' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PartyLicense();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('activities', $data) && null !== $data['activities']) {
            $values = [];
            foreach ($data['activities'] as $value) {
                $values[] = $value;
            }
            $object->setActivities($values);
        } elseif (\array_key_exists('activities', $data) && null === $data['activities']) {
            $object->setActivities(null);
        }
        if (\array_key_exists('addresses', $data) && null !== $data['addresses']) {
            $values_1 = [];
            foreach ($data['addresses'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAddresses($values_1);
        } elseif (\array_key_exists('addresses', $data) && null === $data['addresses']) {
            $object->setAddresses(null);
        }
        if (\array_key_exists('issue_authority', $data) && null !== $data['issue_authority']) {
            $object->setIssueAuthority($data['issue_authority']);
        } elseif (\array_key_exists('issue_authority', $data) && null === $data['issue_authority']) {
            $object->setIssueAuthority(null);
        }
        if (\array_key_exists('issue_date', $data) && null !== $data['issue_date']) {
            $object->setIssueDate($data['issue_date']);
        } elseif (\array_key_exists('issue_date', $data) && null === $data['issue_date']) {
            $object->setIssueDate(null);
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('series', $data) && null !== $data['series']) {
            $object->setSeries($data['series']);
        } elseif (\array_key_exists('series', $data) && null === $data['series']) {
            $object->setSeries(null);
        }
        if (\array_key_exists('suspend_authority', $data) && null !== $data['suspend_authority']) {
            $object->setSuspendAuthority($data['suspend_authority']);
        } elseif (\array_key_exists('suspend_authority', $data) && null === $data['suspend_authority']) {
            $object->setSuspendAuthority(null);
        }
        if (\array_key_exists('suspend_date', $data) && null !== $data['suspend_date']) {
            $object->setSuspendDate($data['suspend_date']);
        } elseif (\array_key_exists('suspend_date', $data) && null === $data['suspend_date']) {
            $object->setSuspendDate(null);
        }
        if (\array_key_exists('valid_from', $data) && null !== $data['valid_from']) {
            $object->setValidFrom($data['valid_from']);
        } elseif (\array_key_exists('valid_from', $data) && null === $data['valid_from']) {
            $object->setValidFrom(null);
        }
        if (\array_key_exists('valid_to', $data) && null !== $data['valid_to']) {
            $object->setValidTo($data['valid_to']);
        } elseif (\array_key_exists('valid_to', $data) && null === $data['valid_to']) {
            $object->setValidTo(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getActivities()) {
            $values = [];
            foreach ($object->getActivities() as $value) {
                $values[] = $value;
            }
            $data['activities'] = $values;
        }
        if (null !== $object->getAddresses()) {
            $values_1 = [];
            foreach ($object->getAddresses() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['addresses'] = $values_1;
        }
        if (null !== $object->getIssueAuthority()) {
            $data['issue_authority'] = $object->getIssueAuthority();
        }
        if (null !== $object->getIssueDate()) {
            $data['issue_date'] = $object->getIssueDate();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getSeries()) {
            $data['series'] = $object->getSeries();
        }
        if (null !== $object->getSuspendAuthority()) {
            $data['suspend_authority'] = $object->getSuspendAuthority();
        }
        if (null !== $object->getSuspendDate()) {
            $data['suspend_date'] = $object->getSuspendDate();
        }
        if (null !== $object->getValidFrom()) {
            $data['valid_from'] = $object->getValidFrom();
        }
        if (null !== $object->getValidTo()) {
            $data['valid_to'] = $object->getValidTo();
        }

        return $data;
    }
}

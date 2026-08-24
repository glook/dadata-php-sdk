<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\BankParty;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BankPartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\BankParty' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\BankParty' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BankParty();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_codes', $data) && null !== $data['additional_codes']) {
            $values = [];
            foreach ($data['additional_codes'] as $value) {
                $values[] = $value;
            }
            $object->setAdditionalCodes($values);
        } elseif (\array_key_exists('additional_codes', $data) && null === $data['additional_codes']) {
            $object->setAdditionalCodes(null);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Glook\Dadata\Generated\Suggestions\Model\SuggestionAddress', 'json', $context));
        }
        if (\array_key_exists('bic', $data) && null !== $data['bic']) {
            $object->setBic($data['bic']);
        } elseif (\array_key_exists('bic', $data) && null === $data['bic']) {
            $object->setBic(null);
        }
        if (\array_key_exists('cbr', $data) && null !== $data['cbr']) {
            $object->setCbr($this->denormalizer->denormalize($data['cbr'], 'Glook\Dadata\Generated\Suggestions\Model\BankParty', 'json', $context));
        } elseif (\array_key_exists('cbr', $data) && null === $data['cbr']) {
            $object->setCbr(null);
        }
        if (\array_key_exists('correspondent_account', $data) && null !== $data['correspondent_account']) {
            $object->setCorrespondentAccount($data['correspondent_account']);
        } elseif (\array_key_exists('correspondent_account', $data) && null === $data['correspondent_account']) {
            $object->setCorrespondentAccount(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('kpp', $data) && null !== $data['kpp']) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && null === $data['kpp']) {
            $object->setKpp(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'Glook\Dadata\Generated\Suggestions\Model\BankName', 'json', $context));
        }
        if (\array_key_exists('okpo', $data) && null !== $data['okpo']) {
            $object->setOkpo($data['okpo']);
        } elseif (\array_key_exists('okpo', $data) && null === $data['okpo']) {
            $object->setOkpo(null);
        }
        if (\array_key_exists('opf', $data)) {
            $object->setOpf($this->denormalizer->denormalize($data['opf'], 'Glook\Dadata\Generated\Suggestions\Model\BankOpf', 'json', $context));
        }
        if (\array_key_exists('payment_city', $data) && null !== $data['payment_city']) {
            $object->setPaymentCity($data['payment_city']);
        } elseif (\array_key_exists('payment_city', $data) && null === $data['payment_city']) {
            $object->setPaymentCity(null);
        }
        if (\array_key_exists('phones', $data) && null !== $data['phones']) {
            $values_1 = [];
            foreach ($data['phones'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Glook\Dadata\Generated\Suggestions\Model\SuggestionPhone', 'json', $context);
            }
            $object->setPhones($values_1);
        } elseif (\array_key_exists('phones', $data) && null === $data['phones']) {
            $object->setPhones(null);
        }
        if (\array_key_exists('registration_number', $data) && null !== $data['registration_number']) {
            $object->setRegistrationNumber($data['registration_number']);
        } elseif (\array_key_exists('registration_number', $data) && null === $data['registration_number']) {
            $object->setRegistrationNumber(null);
        }
        if (\array_key_exists('rkc', $data) && null !== $data['rkc']) {
            $object->setRkc($this->denormalizer->denormalize($data['rkc'], 'Glook\Dadata\Generated\Suggestions\Model\BankParty', 'json', $context));
        } elseif (\array_key_exists('rkc', $data) && null === $data['rkc']) {
            $object->setRkc(null);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($this->denormalizer->denormalize($data['state'], 'Glook\Dadata\Generated\Suggestions\Model\BankState', 'json', $context));
        }
        if (\array_key_exists('swift', $data) && null !== $data['swift']) {
            $object->setSwift($data['swift']);
        } elseif (\array_key_exists('swift', $data) && null === $data['swift']) {
            $object->setSwift(null);
        }
        if (\array_key_exists('swifts', $data) && null !== $data['swifts']) {
            $values_2 = [];
            foreach ($data['swifts'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setSwifts($values_2);
        } elseif (\array_key_exists('swifts', $data) && null === $data['swifts']) {
            $object->setSwifts(null);
        }
        if (\array_key_exists('treasury_accounts', $data) && null !== $data['treasury_accounts']) {
            $values_3 = [];
            foreach ($data['treasury_accounts'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setTreasuryAccounts($values_3);
        } elseif (\array_key_exists('treasury_accounts', $data) && null === $data['treasury_accounts']) {
            $object->setTreasuryAccounts(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAdditionalCodes()) {
            $values = [];
            foreach ($object->getAdditionalCodes() as $value) {
                $values[] = $value;
            }
            $data['additional_codes'] = $values;
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getBic()) {
            $data['bic'] = $object->getBic();
        }
        if (null !== $object->getCbr()) {
            $data['cbr'] = $this->normalizer->normalize($object->getCbr(), 'json', $context);
        }
        if (null !== $object->getCorrespondentAccount()) {
            $data['correspondent_account'] = $object->getCorrespondentAccount();
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
        }
        $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        if (null !== $object->getOkpo()) {
            $data['okpo'] = $object->getOkpo();
        }
        $data['opf'] = $this->normalizer->normalize($object->getOpf(), 'json', $context);
        if (null !== $object->getPaymentCity()) {
            $data['payment_city'] = $object->getPaymentCity();
        }
        if (null !== $object->getPhones()) {
            $values_1 = [];
            foreach ($object->getPhones() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['phones'] = $values_1;
        }
        if (null !== $object->getRegistrationNumber()) {
            $data['registration_number'] = $object->getRegistrationNumber();
        }
        if (null !== $object->getRkc()) {
            $data['rkc'] = $this->normalizer->normalize($object->getRkc(), 'json', $context);
        }
        $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
        if (null !== $object->getSwift()) {
            $data['swift'] = $object->getSwift();
        }
        if (null !== $object->getSwifts()) {
            $values_2 = [];
            foreach ($object->getSwifts() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['swifts'] = $values_2;
        }
        if (null !== $object->getTreasuryAccounts()) {
            $values_3 = [];
            foreach ($object->getTreasuryAccounts() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['treasury_accounts'] = $values_3;
        }

        return $data;
    }
}

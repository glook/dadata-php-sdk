<?php

namespace Glook\Dadata\Generated\Suggestions\Normalizer;

use Glook\Dadata\Generated\Suggestions\Model\Party;
use Glook\Dadata\Generated\Suggestions\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'Glook\Dadata\Generated\Suggestions\Model\Party' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'Glook\Dadata\Generated\Suggestions\Model\Party' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Party();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'Glook\Dadata\Generated\Suggestions\Model\PartyAddress', 'json', $context));
        }
        if (\array_key_exists('authorities', $data)) {
            $object->setAuthorities($this->denormalizer->denormalize($data['authorities'], 'Glook\Dadata\Generated\Suggestions\Model\PartyAuthorities', 'json', $context));
        }
        if (\array_key_exists('branch_count', $data) && null !== $data['branch_count']) {
            $object->setBranchCount($data['branch_count']);
        } elseif (\array_key_exists('branch_count', $data) && null === $data['branch_count']) {
            $object->setBranchCount(null);
        }
        if (\array_key_exists('branch_type', $data) && null !== $data['branch_type']) {
            $object->setBranchType($data['branch_type']);
        } elseif (\array_key_exists('branch_type', $data) && null === $data['branch_type']) {
            $object->setBranchType(null);
        }
        if (\array_key_exists('capital', $data)) {
            $object->setCapital($this->denormalizer->denormalize($data['capital'], 'Glook\Dadata\Generated\Suggestions\Model\PartyCapital', 'json', $context));
        }
        if (\array_key_exists('citizenship', $data)) {
            $object->setCitizenship($this->denormalizer->denormalize($data['citizenship'], 'Glook\Dadata\Generated\Suggestions\Model\PartyCountry', 'json', $context));
        }
        if (\array_key_exists('documents', $data)) {
            $object->setDocuments($this->denormalizer->denormalize($data['documents'], 'Glook\Dadata\Generated\Suggestions\Model\PartyDocuments', 'json', $context));
        }
        if (\array_key_exists('emails', $data) && null !== $data['emails']) {
            $values = [];
            foreach ($data['emails'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Glook\Dadata\Generated\Suggestions\Model\SuggestionEmail', 'json', $context);
            }
            $object->setEmails($values);
        } elseif (\array_key_exists('emails', $data) && null === $data['emails']) {
            $object->setEmails(null);
        }
        if (\array_key_exists('employee_count', $data) && null !== $data['employee_count']) {
            $object->setEmployeeCount($data['employee_count']);
        } elseif (\array_key_exists('employee_count', $data) && null === $data['employee_count']) {
            $object->setEmployeeCount(null);
        }
        if (\array_key_exists('finance', $data)) {
            $object->setFinance($this->denormalizer->denormalize($data['finance'], 'Glook\Dadata\Generated\Suggestions\Model\PartyFinance', 'json', $context));
        }
        if (\array_key_exists('fio', $data)) {
            $object->setFio($this->denormalizer->denormalize($data['fio'], 'Glook\Dadata\Generated\Suggestions\Model\Fio', 'json', $context));
        }
        if (\array_key_exists('founders', $data) && null !== $data['founders']) {
            $values_1 = [];
            foreach ($data['founders'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Glook\Dadata\Generated\Suggestions\Model\FounderParty', 'json', $context);
            }
            $object->setFounders($values_1);
        } elseif (\array_key_exists('founders', $data) && null === $data['founders']) {
            $object->setFounders(null);
        }
        if (\array_key_exists('hid', $data) && null !== $data['hid']) {
            $object->setHid($data['hid']);
        } elseif (\array_key_exists('hid', $data) && null === $data['hid']) {
            $object->setHid(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('invalid', $data) && null !== $data['invalid']) {
            $object->setInvalid($data['invalid']);
        } elseif (\array_key_exists('invalid', $data) && null === $data['invalid']) {
            $object->setInvalid(null);
        }
        if (\array_key_exists('kpp', $data) && null !== $data['kpp']) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && null === $data['kpp']) {
            $object->setKpp(null);
        }
        if (\array_key_exists('kpp_largest', $data) && null !== $data['kpp_largest']) {
            $object->setKppLargest($data['kpp_largest']);
        } elseif (\array_key_exists('kpp_largest', $data) && null === $data['kpp_largest']) {
            $object->setKppLargest(null);
        }
        if (\array_key_exists('licenses', $data) && null !== $data['licenses']) {
            $values_2 = [];
            foreach ($data['licenses'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Glook\Dadata\Generated\Suggestions\Model\PartyLicense', 'json', $context);
            }
            $object->setLicenses($values_2);
        } elseif (\array_key_exists('licenses', $data) && null === $data['licenses']) {
            $object->setLicenses(null);
        }
        if (\array_key_exists('management', $data)) {
            $object->setManagement($this->denormalizer->denormalize($data['management'], 'Glook\Dadata\Generated\Suggestions\Model\PartyManagement', 'json', $context));
        }
        if (\array_key_exists('managers', $data) && null !== $data['managers']) {
            $values_3 = [];
            foreach ($data['managers'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Glook\Dadata\Generated\Suggestions\Model\ManagerParty', 'json', $context);
            }
            $object->setManagers($values_3);
        } elseif (\array_key_exists('managers', $data) && null === $data['managers']) {
            $object->setManagers(null);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($this->denormalizer->denormalize($data['name'], 'Glook\Dadata\Generated\Suggestions\Model\PartyName', 'json', $context));
        }
        if (\array_key_exists('ogrn', $data) && null !== $data['ogrn']) {
            $object->setOgrn($data['ogrn']);
        } elseif (\array_key_exists('ogrn', $data) && null === $data['ogrn']) {
            $object->setOgrn(null);
        }
        if (\array_key_exists('ogrn_date', $data) && null !== $data['ogrn_date']) {
            $object->setOgrnDate($data['ogrn_date']);
        } elseif (\array_key_exists('ogrn_date', $data) && null === $data['ogrn_date']) {
            $object->setOgrnDate(null);
        }
        if (\array_key_exists('okato', $data) && null !== $data['okato']) {
            $object->setOkato($data['okato']);
        } elseif (\array_key_exists('okato', $data) && null === $data['okato']) {
            $object->setOkato(null);
        }
        if (\array_key_exists('okfs', $data) && null !== $data['okfs']) {
            $object->setOkfs($data['okfs']);
        } elseif (\array_key_exists('okfs', $data) && null === $data['okfs']) {
            $object->setOkfs(null);
        }
        if (\array_key_exists('okogu', $data) && null !== $data['okogu']) {
            $object->setOkogu($data['okogu']);
        } elseif (\array_key_exists('okogu', $data) && null === $data['okogu']) {
            $object->setOkogu(null);
        }
        if (\array_key_exists('okpo', $data) && null !== $data['okpo']) {
            $object->setOkpo($data['okpo']);
        } elseif (\array_key_exists('okpo', $data) && null === $data['okpo']) {
            $object->setOkpo(null);
        }
        if (\array_key_exists('oktmo', $data) && null !== $data['oktmo']) {
            $object->setOktmo($data['oktmo']);
        } elseif (\array_key_exists('oktmo', $data) && null === $data['oktmo']) {
            $object->setOktmo(null);
        }
        if (\array_key_exists('okved', $data) && null !== $data['okved']) {
            $object->setOkved($data['okved']);
        } elseif (\array_key_exists('okved', $data) && null === $data['okved']) {
            $object->setOkved(null);
        }
        if (\array_key_exists('okved_type', $data) && null !== $data['okved_type']) {
            $object->setOkvedType($data['okved_type']);
        } elseif (\array_key_exists('okved_type', $data) && null === $data['okved_type']) {
            $object->setOkvedType(null);
        }
        if (\array_key_exists('okveds', $data) && null !== $data['okveds']) {
            $values_4 = [];
            foreach ($data['okveds'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Glook\Dadata\Generated\Suggestions\Model\PartyOkved', 'json', $context);
            }
            $object->setOkveds($values_4);
        } elseif (\array_key_exists('okveds', $data) && null === $data['okveds']) {
            $object->setOkveds(null);
        }
        if (\array_key_exists('opf', $data)) {
            $object->setOpf($this->denormalizer->denormalize($data['opf'], 'Glook\Dadata\Generated\Suggestions\Model\PartyOpf', 'json', $context));
        }
        if (\array_key_exists('phones', $data) && null !== $data['phones']) {
            $values_5 = [];
            foreach ($data['phones'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Glook\Dadata\Generated\Suggestions\Model\SuggestionPartyPhone', 'json', $context);
            }
            $object->setPhones($values_5);
        } elseif (\array_key_exists('phones', $data) && null === $data['phones']) {
            $object->setPhones(null);
        }
        if (\array_key_exists('predecessors', $data) && null !== $data['predecessors']) {
            $values_6 = [];
            foreach ($data['predecessors'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Glook\Dadata\Generated\Suggestions\Model\PartyReference', 'json', $context);
            }
            $object->setPredecessors($values_6);
        } elseif (\array_key_exists('predecessors', $data) && null === $data['predecessors']) {
            $object->setPredecessors(null);
        }
        if (\array_key_exists('qc', $data) && null !== $data['qc']) {
            $object->setQc($data['qc']);
        } elseif (\array_key_exists('qc', $data) && null === $data['qc']) {
            $object->setQc(null);
        }
        if (\array_key_exists('source', $data) && null !== $data['source']) {
            $object->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && null === $data['source']) {
            $object->setSource(null);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($this->denormalizer->denormalize($data['state'], 'Glook\Dadata\Generated\Suggestions\Model\PartyState', 'json', $context));
        }
        if (\array_key_exists('successors', $data) && null !== $data['successors']) {
            $values_7 = [];
            foreach ($data['successors'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Glook\Dadata\Generated\Suggestions\Model\PartyReference', 'json', $context);
            }
            $object->setSuccessors($values_7);
        } elseif (\array_key_exists('successors', $data) && null === $data['successors']) {
            $object->setSuccessors(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        if (null !== $object->getAuthorities()) {
            $data['authorities'] = $this->normalizer->normalize($object->getAuthorities(), 'json', $context);
        }
        if (null !== $object->getBranchCount()) {
            $data['branch_count'] = $object->getBranchCount();
        }
        if (null !== $object->getBranchType()) {
            $data['branch_type'] = $object->getBranchType();
        }
        if (null !== $object->getCapital()) {
            $data['capital'] = $this->normalizer->normalize($object->getCapital(), 'json', $context);
        }
        if (null !== $object->getCitizenship()) {
            $data['citizenship'] = $this->normalizer->normalize($object->getCitizenship(), 'json', $context);
        }
        if (null !== $object->getDocuments()) {
            $data['documents'] = $this->normalizer->normalize($object->getDocuments(), 'json', $context);
        }
        if (null !== $object->getEmails()) {
            $values = [];
            foreach ($object->getEmails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['emails'] = $values;
        }
        if (null !== $object->getEmployeeCount()) {
            $data['employee_count'] = $object->getEmployeeCount();
        }
        if (null !== $object->getFinance()) {
            $data['finance'] = $this->normalizer->normalize($object->getFinance(), 'json', $context);
        }
        if (null !== $object->getFio()) {
            $data['fio'] = $this->normalizer->normalize($object->getFio(), 'json', $context);
        }
        if (null !== $object->getFounders()) {
            $values_1 = [];
            foreach ($object->getFounders() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['founders'] = $values_1;
        }
        if (null !== $object->getHid()) {
            $data['hid'] = $object->getHid();
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getInvalid()) {
            $data['invalid'] = $object->getInvalid();
        }
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
        }
        if (null !== $object->getKppLargest()) {
            $data['kpp_largest'] = $object->getKppLargest();
        }
        if (null !== $object->getLicenses()) {
            $values_2 = [];
            foreach ($object->getLicenses() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['licenses'] = $values_2;
        }
        if (null !== $object->getManagement()) {
            $data['management'] = $this->normalizer->normalize($object->getManagement(), 'json', $context);
        }
        if (null !== $object->getManagers()) {
            $values_3 = [];
            foreach ($object->getManagers() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['managers'] = $values_3;
        }
        $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
        if (null !== $object->getOgrn()) {
            $data['ogrn'] = $object->getOgrn();
        }
        if (null !== $object->getOgrnDate()) {
            $data['ogrn_date'] = $object->getOgrnDate();
        }
        if (null !== $object->getOkato()) {
            $data['okato'] = $object->getOkato();
        }
        if (null !== $object->getOkfs()) {
            $data['okfs'] = $object->getOkfs();
        }
        if (null !== $object->getOkogu()) {
            $data['okogu'] = $object->getOkogu();
        }
        if (null !== $object->getOkpo()) {
            $data['okpo'] = $object->getOkpo();
        }
        if (null !== $object->getOktmo()) {
            $data['oktmo'] = $object->getOktmo();
        }
        if (null !== $object->getOkved()) {
            $data['okved'] = $object->getOkved();
        }
        if (null !== $object->getOkvedType()) {
            $data['okved_type'] = $object->getOkvedType();
        }
        if (null !== $object->getOkveds()) {
            $values_4 = [];
            foreach ($object->getOkveds() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['okveds'] = $values_4;
        }
        if (null !== $object->getOpf()) {
            $data['opf'] = $this->normalizer->normalize($object->getOpf(), 'json', $context);
        }
        if (null !== $object->getPhones()) {
            $values_5 = [];
            foreach ($object->getPhones() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['phones'] = $values_5;
        }
        if (null !== $object->getPredecessors()) {
            $values_6 = [];
            foreach ($object->getPredecessors() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['predecessors'] = $values_6;
        }
        if (null !== $object->getQc()) {
            $data['qc'] = $object->getQc();
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        $data['state'] = $this->normalizer->normalize($object->getState(), 'json', $context);
        if (null !== $object->getSuccessors()) {
            $values_7 = [];
            foreach ($object->getSuccessors() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['successors'] = $values_7;
        }
        $data['type'] = $object->getType();

        return $data;
    }
}

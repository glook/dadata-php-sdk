<?php

namespace Glook\Dadata\Generated\Clear\Normalizer;

use Glook\Dadata\Generated\Clear\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = ['Glook\Dadata\Generated\Clear\Model\DadataError' => 'Glook\Dadata\Generated\Clear\Normalizer\DadataErrorNormalizer', 'Glook\Dadata\Generated\Clear\Model\RecordString' => 'Glook\Dadata\Generated\Clear\Normalizer\RecordStringNormalizer', 'Glook\Dadata\Generated\Clear\Model\RecordEntity' => 'Glook\Dadata\Generated\Clear\Normalizer\RecordEntityNormalizer', 'Glook\Dadata\Generated\Clear\Model\Address' => 'Glook\Dadata\Generated\Clear\Normalizer\AddressNormalizer', 'Glook\Dadata\Generated\Clear\Model\AddressDivisions' => 'Glook\Dadata\Generated\Clear\Normalizer\AddressDivisionsNormalizer', 'Glook\Dadata\Generated\Clear\Model\AdministrativeDivision' => 'Glook\Dadata\Generated\Clear\Normalizer\AdministrativeDivisionNormalizer', 'Glook\Dadata\Generated\Clear\Model\AddressPart' => 'Glook\Dadata\Generated\Clear\Normalizer\AddressPartNormalizer', 'Glook\Dadata\Generated\Clear\Model\Metro' => 'Glook\Dadata\Generated\Clear\Normalizer\MetroNormalizer', 'Glook\Dadata\Generated\Clear\Model\AsIs' => 'Glook\Dadata\Generated\Clear\Normalizer\AsIsNormalizer', 'Glook\Dadata\Generated\Clear\Model\Birthdate' => 'Glook\Dadata\Generated\Clear\Normalizer\BirthdateNormalizer', 'Glook\Dadata\Generated\Clear\Model\Email' => 'Glook\Dadata\Generated\Clear\Normalizer\EmailNormalizer', 'Glook\Dadata\Generated\Clear\Model\Name' => 'Glook\Dadata\Generated\Clear\Normalizer\NameNormalizer', 'Glook\Dadata\Generated\Clear\Model\Passport' => 'Glook\Dadata\Generated\Clear\Normalizer\PassportNormalizer', 'Glook\Dadata\Generated\Clear\Model\Phone' => 'Glook\Dadata\Generated\Clear\Normalizer\PhoneNormalizer', 'Glook\Dadata\Generated\Clear\Model\Vehicle' => 'Glook\Dadata\Generated\Clear\Normalizer\VehicleNormalizer', '\Jane\JsonSchemaRuntime\Reference' => '\Glook\Dadata\Generated\Clear\Runtime\Normalizer\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}

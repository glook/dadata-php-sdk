<?php

namespace Glook\Dadata\Generated\Clear;

use Glook\Dadata\Generated\Clear\Endpoint\CleanAddress;
use Glook\Dadata\Generated\Clear\Endpoint\CleanAsIs;
use Glook\Dadata\Generated\Clear\Endpoint\CleanBirthdate;
use Glook\Dadata\Generated\Clear\Endpoint\CleanEmail;
use Glook\Dadata\Generated\Clear\Endpoint\CleanName;
use Glook\Dadata\Generated\Clear\Endpoint\CleanPassport;
use Glook\Dadata\Generated\Clear\Endpoint\CleanPhone;
use Glook\Dadata\Generated\Clear\Endpoint\CleanRecord;
use Glook\Dadata\Generated\Clear\Endpoint\CleanVehicle;
use Glook\Dadata\Generated\Clear\Exception\UnexpectedStatusCodeException;
use Glook\Dadata\Generated\Clear\Model\Address;
use Glook\Dadata\Generated\Clear\Model\AsIs;
use Glook\Dadata\Generated\Clear\Model\Birthdate;
use Glook\Dadata\Generated\Clear\Model\DadataError;
use Glook\Dadata\Generated\Clear\Model\Email;
use Glook\Dadata\Generated\Clear\Model\Name;
use Glook\Dadata\Generated\Clear\Model\Passport;
use Glook\Dadata\Generated\Clear\Model\Phone;
use Glook\Dadata\Generated\Clear\Model\RecordEntity;
use Glook\Dadata\Generated\Clear\Model\RecordString;
use Glook\Dadata\Generated\Clear\Model\Vehicle;
use Glook\Dadata\Generated\Clear\Normalizer\JaneObjectNormalizer;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Serializer;

class Client extends Runtime\Client\Client
{
    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Address[]|DadataError|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanAddress(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanAddress($requestBody), $fetch);
    }

    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DadataError|Name[]|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanName(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanName($requestBody), $fetch);
    }

    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DadataError|Phone[]|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanPhone(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanPhone($requestBody), $fetch);
    }

    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DadataError|Email[]|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanEmail(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanEmail($requestBody), $fetch);
    }

    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Birthdate[]|DadataError|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanBirthdate(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanBirthdate($requestBody), $fetch);
    }

    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DadataError|Passport[]|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanPassport(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanPassport($requestBody), $fetch);
    }

    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DadataError|ResponseInterface|Vehicle[]
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanVehicle(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanVehicle($requestBody), $fetch);
    }

    /**
     * @param string[] $requestBody
     * @param string   $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|AsIs[]|DadataError|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanAsIs(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanAsIs($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DadataError|RecordEntity|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function cleanRecord(RecordString $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new CleanRecord($requestBody), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://cleaner.dadata.ru');
            $plugins[] = new AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new PluginClient($httpClient, $plugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new Serializer([new ArrayDenormalizer(), new JaneObjectNormalizer()], [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}

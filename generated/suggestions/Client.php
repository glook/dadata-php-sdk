<?php

namespace Glook\Dadata\Generated\Suggestions;

use Glook\Dadata\Generated\Suggestions\Endpoint\FindAffiliatedParty;
use Glook\Dadata\Generated\Suggestions\Endpoint\FindByEmailCompany;
use Glook\Dadata\Generated\Suggestions\Endpoint\FindByIdAddress;
use Glook\Dadata\Generated\Suggestions\Endpoint\FindByIdBank;
use Glook\Dadata\Generated\Suggestions\Endpoint\FindByIdDelivery;
use Glook\Dadata\Generated\Suggestions\Endpoint\FindByIdFias;
use Glook\Dadata\Generated\Suggestions\Endpoint\FindByIdOutward;
use Glook\Dadata\Generated\Suggestions\Endpoint\FindByIdParty;
use Glook\Dadata\Generated\Suggestions\Endpoint\GeoLocateAddress;
use Glook\Dadata\Generated\Suggestions\Endpoint\GeoLocateOutward;
use Glook\Dadata\Generated\Suggestions\Endpoint\IpLocateAddress;
use Glook\Dadata\Generated\Suggestions\Endpoint\SuggestAddress;
use Glook\Dadata\Generated\Suggestions\Endpoint\SuggestBank;
use Glook\Dadata\Generated\Suggestions\Endpoint\SuggestEmail;
use Glook\Dadata\Generated\Suggestions\Endpoint\SuggestFias;
use Glook\Dadata\Generated\Suggestions\Endpoint\SuggestFio;
use Glook\Dadata\Generated\Suggestions\Endpoint\SuggestOutward;
use Glook\Dadata\Generated\Suggestions\Endpoint\SuggestParty;
use Glook\Dadata\Generated\Suggestions\Exception\UnexpectedStatusCodeException;
use Glook\Dadata\Generated\Suggestions\Model\DetectAddressResponse;
use Glook\Dadata\Generated\Suggestions\Model\FindAddressByIdRequest;
use Glook\Dadata\Generated\Suggestions\Model\FindAffiliatedPartyRequest;
use Glook\Dadata\Generated\Suggestions\Model\FindBankByIdRequest;
use Glook\Dadata\Generated\Suggestions\Model\FindFiasByIdRequest;
use Glook\Dadata\Generated\Suggestions\Model\FindPartyByIdRequest;
use Glook\Dadata\Generated\Suggestions\Model\GeoLocateAddressRequest;
use Glook\Dadata\Generated\Suggestions\Model\GeoLocateOutwardRequest;
use Glook\Dadata\Generated\Suggestions\Model\IpLocateAddressRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestAddressRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestBankRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestFiasRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestFioRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestOutwardRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestPartyRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseAddress;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseBankParty;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseCompanyWithEmail;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseDelivery;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseEmail;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseFiasAddress;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseFio;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseObject;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseParty;
use Glook\Dadata\Generated\Suggestions\Normalizer\JaneObjectNormalizer;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseObject
     *
     * @throws UnexpectedStatusCodeException
     */
    public function suggestOutward(string $name, SuggestOutwardRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuggestOutward($name, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseParty
     *
     * @throws UnexpectedStatusCodeException
     */
    public function suggestParty(SuggestPartyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuggestParty($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseFio
     *
     * @throws UnexpectedStatusCodeException
     */
    public function suggestFio(SuggestFioRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuggestFio($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseFiasAddress
     *
     * @throws UnexpectedStatusCodeException
     */
    public function suggestFias(SuggestFiasRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuggestFias($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseEmail
     *
     * @throws UnexpectedStatusCodeException
     */
    public function suggestEmail(SuggestRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuggestEmail($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseBankParty
     *
     * @throws UnexpectedStatusCodeException
     */
    public function suggestBank(SuggestBankRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuggestBank($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseAddress
     *
     * @throws UnexpectedStatusCodeException
     */
    public function suggestAddress(SuggestAddressRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new SuggestAddress($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|DetectAddressResponse|ResponseInterface
     *
     * @throws UnexpectedStatusCodeException
     */
    public function ipLocateAddress(IpLocateAddressRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new IpLocateAddress($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseObject
     *
     * @throws UnexpectedStatusCodeException
     */
    public function geoLocateOutward(string $name, GeoLocateOutwardRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GeoLocateOutward($name, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseAddress
     *
     * @throws UnexpectedStatusCodeException
     */
    public function geoLocateAddress(GeoLocateAddressRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new GeoLocateAddress($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseObject
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findByIdOutward(string $name, SuggestRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindByIdOutward($name, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseParty
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findByIdParty(FindPartyByIdRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindByIdParty($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseFiasAddress
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findByIdFias(FindFiasByIdRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindByIdFias($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseBankParty
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findByIdBank(FindBankByIdRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindByIdBank($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseAddress
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findByIdAddress(FindAddressByIdRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindByIdAddress($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseDelivery
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findByIdDelivery(SuggestRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindByIdDelivery($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseCompanyWithEmail
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findByEmailCompany(SuggestRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindByEmailCompany($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|ResponseInterface|SuggestResponseParty
     *
     * @throws UnexpectedStatusCodeException
     */
    public function findAffiliatedParty(FindAffiliatedPartyRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new FindAffiliatedParty($requestBody), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [])
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri('https://suggestions.dadata.ru/suggestions');
            $plugins[] = new AddHostPlugin($uri);
            $plugins[] = new AddPathPlugin($uri);
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

<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Suggestions;

use Glook\Dadata\Generated\Suggestions\Client as SuggestionsClient;
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
use Glook\Dadata\SuggestionsClientFactory;
use Glook\Dadata\Tests\Support\ClientTestCase;
use Glook\Dadata\Tests\Support\RecordingHttpClient;
use Psr\Http\Message\RequestInterface;

/**
 * @internal
 *
 * @coversNothing
 */
final class EndpointsTest extends ClientTestCase
{
    /** @var SuggestionsClient */
    private $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = SuggestionsClientFactory::create('test-token', 'test-secret');
    }

    public function testSuggestEmailUrl(): void
    {
        $this->client->suggestEmail(
            (new SuggestRequest())->setQuery('maria@'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/email'
        );
    }

    public function testSuggestEmailWithUtf8Query(): void
    {
        $this->client->suggestEmail(
            (new SuggestRequest())->setQuery('мария@'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $body = json_decode((string) RecordingHttpClient::lastRequest()->getBody(), true);
        $this->assertSame('мария@', $body['query']);
    }

    public function testSuggestAddressUrl(): void
    {
        $this->client->suggestAddress(
            (new SuggestAddressRequest())->setQuery('москва'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/address'
        );
    }

    public function testSuggestBankUrl(): void
    {
        $this->client->suggestBank(
            (new SuggestBankRequest())->setQuery('сбер'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/bank'
        );
    }

    public function testSuggestFiasUrl(): void
    {
        $this->client->suggestFias(
            (new SuggestFiasRequest())->setQuery('москва'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/fias'
        );
    }

    public function testSuggestFioUrl(): void
    {
        $this->client->suggestFio(
            (new SuggestFioRequest())->setQuery('ива'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/fio'
        );
    }

    public function testSuggestPartyUrl(): void
    {
        $this->client->suggestParty(
            (new SuggestPartyRequest())->setQuery('сбер'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/party'
        );
    }

    public function testSuggestOutwardUrl(): void
    {
        $this->client->suggestOutward(
            'ems',
            (new SuggestOutwardRequest())->setQuery('мос'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/ems'
        );
    }

    public function testFindByIdAddressUrl(): void
    {
        $this->client->findByIdAddress(
            (new FindAddressByIdRequest())->setQuery('77000000000000'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/address'
        );
    }

    public function testFindByIdBankUrl(): void
    {
        $this->client->findByIdBank(
            (new FindBankByIdRequest())->setQuery('044525225'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/bank'
        );
    }

    public function testFindByIdPartyUrl(): void
    {
        $this->client->findByIdParty(
            (new FindPartyByIdRequest())->setQuery('7707083893'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/party'
        );
    }

    public function testFindByIdFiasUrl(): void
    {
        $this->client->findByIdFias(
            (new FindFiasByIdRequest())->setQuery('9120b43f-2fae-4838-a144-85e43ab3c5c7'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/fias'
        );
    }

    public function testFindByIdDeliveryUrl(): void
    {
        $this->client->findByIdDelivery(
            (new SuggestRequest())->setQuery('123456'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/delivery'
        );
    }

    public function testFindByEmailCompanyUrl(): void
    {
        $this->client->findByEmailCompany(
            (new SuggestRequest())->setQuery('sber.ru'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findByEmail/company'
        );
    }

    public function testFindAffiliatedPartyUrl(): void
    {
        $this->client->findAffiliatedParty(
            (new FindAffiliatedPartyRequest())->setQuery('7707083893'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findAffiliated/party'
        );
    }

    public function testFindByIdOutwardUrl(): void
    {
        $this->client->findByIdOutward(
            'ems',
            (new SuggestRequest())->setQuery('123'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/findById/ems'
        );
    }

    public function testGeoLocateAddressUrl(): void
    {
        $this->client->geoLocateAddress(
            (new GeoLocateAddressRequest())->setLat(55.878)->setLon(37.653),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/geolocate/address'
        );
    }

    public function testGeoLocateOutwardUrl(): void
    {
        $this->client->geoLocateOutward(
            'ems',
            (new GeoLocateOutwardRequest())->setLat(55.878)->setLon(37.653),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/geolocate/ems'
        );
    }

    public function testIpLocateAddressUrl(): void
    {
        $this->client->ipLocateAddress(
            (new IpLocateAddressRequest())->setIp('192.168.1.1'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertSuggestionsRequest(
            RecordingHttpClient::lastRequest(),
            'https://suggestions.dadata.ru/suggestions/api/4_1/rs/iplocate/address'
        );
    }

    public function testRequestCountFieldIsSerializedInBody(): void
    {
        $this->client->suggestEmail(
            (new SuggestRequest())->setQuery('test@')->setCount(5),
            SuggestionsClient::FETCH_RESPONSE
        );

        $body = json_decode((string) RecordingHttpClient::lastRequest()->getBody(), true);
        $this->assertSame(5, $body['count']);
        $this->assertSame('test@', $body['query']);
    }

    private function assertSuggestionsRequest(RequestInterface $request, string $expectedUrl): void
    {
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame($expectedUrl, (string) $request->getUri());
        $this->assertSame('Token test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('test-secret', $request->getHeaderLine('X-Secret'));
        $this->assertStringContainsString('application/json', $request->getHeaderLine('Content-Type'));
    }
}

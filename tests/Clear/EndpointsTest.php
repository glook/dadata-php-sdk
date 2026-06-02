<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Clear;

use Glook\Dadata\DadataClientFactory;
use Glook\Dadata\Generated\Clear\Client as ClearClient;
use Glook\Dadata\Generated\Clear\Model\RecordString;
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
    /** @var ClearClient */
    private $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = DadataClientFactory::createClearClient('test-token', 'test-secret');
    }

    public function testCleanAddressUrl(): void
    {
        $this->client->cleanAddress(['мск сухонская 11'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/address'
        );
    }

    public function testCleanAddressBodyIsSerialized(): void
    {
        $this->client->cleanAddress(['мск сухонская 11', 'санкт-петербург'], ClearClient::FETCH_RESPONSE);

        $body = json_decode((string) RecordingHttpClient::lastRequest()->getBody(), true);
        $this->assertSame(['мск сухонская 11', 'санкт-петербург'], $body);
    }

    public function testCleanNameUrl(): void
    {
        $this->client->cleanName(['иванов иван иванович'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/name'
        );
    }

    public function testCleanPhoneUrl(): void
    {
        $this->client->cleanPhone(['+7 999 999 99 99'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/phone'
        );
    }

    public function testCleanEmailUrl(): void
    {
        $this->client->cleanEmail(['test@example.com'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/email'
        );
    }

    public function testCleanBirthdateUrl(): void
    {
        $this->client->cleanBirthdate(['01.01.1990'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/birthdate'
        );
    }

    public function testCleanPassportUrl(): void
    {
        $this->client->cleanPassport(['4507 443552'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/passport'
        );
    }

    public function testCleanVehicleUrl(): void
    {
        $this->client->cleanVehicle(['форд фокус 2008'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/vehicle'
        );
    }

    public function testCleanAsIsUrl(): void
    {
        $this->client->cleanAsIs(['some string'], ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean/as_is'
        );
    }

    public function testCleanRecordUrl(): void
    {
        $record = (new RecordString())
            ->setStructure(['ADDRESS', 'NAME'])
            ->setData([['мск сухонская 11', 'иванов иван']])
        ;

        $this->client->cleanRecord($record, ClearClient::FETCH_RESPONSE);

        $this->assertClearRequest(
            RecordingHttpClient::lastRequest(),
            'https://cleaner.dadata.ru/api/v1/clean'
        );
    }

    public function testCleanAddressWithUtf8Input(): void
    {
        $this->client->cleanAddress(['Санкт-Петербург, Невский проспект, 1'], ClearClient::FETCH_RESPONSE);

        $body = json_decode((string) RecordingHttpClient::lastRequest()->getBody(), true);
        $this->assertSame(['Санкт-Петербург, Невский проспект, 1'], $body);
    }

    private function assertClearRequest(RequestInterface $request, string $expectedUrl): void
    {
        $this->assertSame('POST', $request->getMethod());
        $this->assertSame($expectedUrl, (string) $request->getUri());
        $this->assertSame('Token test-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('test-secret', $request->getHeaderLine('X-Secret'));
        $this->assertStringContainsString('application/json', $request->getHeaderLine('Content-Type'));
    }
}

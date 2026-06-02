<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Clear;

use Glook\Dadata\DadataClientFactory;
use Glook\Dadata\Generated\Clear\Client as ClearClient;
use Glook\Dadata\Tests\Support\ClientTestCase;
use Glook\Dadata\Tests\Support\HeaderPlugin;
use Glook\Dadata\Tests\Support\RecordingHttpClient;

/**
 * @internal
 *
 * @coversNothing
 */
final class ClientFactoryTest extends ClientTestCase
{
    public function testCreateReturnsClearClient(): void
    {
        $client = DadataClientFactory::createClearClient('my-token', 'my-secret');

        $this->assertInstanceOf(ClearClient::class, $client);
    }

    public function testSendsAuthorizationHeader(): void
    {
        $client = DadataClientFactory::createClearClient('api-token', 'secret-key');
        $client->cleanAddress(['мск сухонская 11'], ClearClient::FETCH_RESPONSE);

        $request = RecordingHttpClient::lastRequest();
        $this->assertSame('Token api-token', $request->getHeaderLine('Authorization'));
    }

    public function testSendsSecretHeader(): void
    {
        $client = DadataClientFactory::createClearClient('api-token', 'secret-key');
        $client->cleanAddress(['мск сухонская 11'], ClearClient::FETCH_RESPONSE);

        $request = RecordingHttpClient::lastRequest();
        $this->assertSame('secret-key', $request->getHeaderLine('X-Secret'));
    }

    public function testAdditionalPluginsAreApplied(): void
    {
        $client = DadataClientFactory::createClearClient('api-token', 'secret-key', [
            new HeaderPlugin('X-Custom-Header', 'custom-value'),
        ]);
        $client->cleanAddress(['мск сухонская 11'], ClearClient::FETCH_RESPONSE);

        $request = RecordingHttpClient::lastRequest();
        $this->assertSame('custom-value', $request->getHeaderLine('X-Custom-Header'));
    }
}

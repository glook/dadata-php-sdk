<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Suggestions;

use Glook\Dadata\Generated\Suggestions\Client as SuggestionsClient;
use Glook\Dadata\Generated\Suggestions\Model\SuggestRequest;
use Glook\Dadata\SuggestionsClientFactory;
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
    public function testCreateReturnsSuggestionsClient(): void
    {
        $client = SuggestionsClientFactory::create('my-token', 'my-secret');

        $this->assertInstanceOf(SuggestionsClient::class, $client);
    }

    public function testSendsAuthorizationHeader(): void
    {
        $client = SuggestionsClientFactory::create('api-token', 'secret-key');
        $client->suggestEmail(
            (new SuggestRequest())->setQuery('test@'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $request = RecordingHttpClient::lastRequest();
        $this->assertSame('Token api-token', $request->getHeaderLine('Authorization'));
    }

    public function testSendsSecretHeader(): void
    {
        $client = SuggestionsClientFactory::create('api-token', 'secret-key');
        $client->suggestEmail(
            (new SuggestRequest())->setQuery('test@'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $request = RecordingHttpClient::lastRequest();
        $this->assertSame('secret-key', $request->getHeaderLine('X-Secret'));
    }

    public function testAdditionalPluginsAreApplied(): void
    {
        $client = SuggestionsClientFactory::create('api-token', 'secret-key', [
            new HeaderPlugin('X-Custom-Header', 'custom-value'),
        ]);
        $client->suggestEmail(
            (new SuggestRequest())->setQuery('test@'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $request = RecordingHttpClient::lastRequest();
        $this->assertSame('custom-value', $request->getHeaderLine('X-Custom-Header'));
    }
}

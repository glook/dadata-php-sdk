<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Compatibility;

use Glook\Dadata\ClearClientFactory;
use Glook\Dadata\Generated\Clear\Client as ClearClient;
use Glook\Dadata\Generated\Clear\Model\RecordString;
use Glook\Dadata\Generated\Suggestions\Client as SuggestionsClient;
use Glook\Dadata\Generated\Suggestions\Model\SuggestAddressRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestRequest;
use Glook\Dadata\SuggestionsClientFactory;
use Glook\Dadata\Tests\Support\ClientTestCase;
use Glook\Dadata\Tests\Support\RecordingHttpClient;

/**
 * @internal
 *
 * @coversNothing
 */
final class PhpVersionSanityTest extends ClientTestCase
{
    public function testRunningPhpVersionIsLoggedForDebugging(): void
    {
        $this->addToAssertionCount(1);
        fwrite(STDERR, PHP_EOL.'[PHP '.PHP_VERSION.'] '.PHP_OS.PHP_EOL);
    }

    public function testSuggestionsClientCanBeInstantiated(): void
    {
        $client = SuggestionsClientFactory::create('token', 'secret');

        $this->assertInstanceOf(SuggestionsClient::class, $client);
    }

    public function testClearClientCanBeInstantiated(): void
    {
        $client = ClearClientFactory::create('token', 'secret');

        $this->assertInstanceOf(ClearClient::class, $client);
    }

    public function testSuggestRequestFluentInterface(): void
    {
        $request = (new SuggestRequest())
            ->setQuery('москва')
            ->setCount(5)
        ;

        $this->assertSame('москва', $request->getQuery());
        $this->assertSame(5, $request->getCount());
    }

    public function testSuggestRequestAcceptsNullCount(): void
    {
        $request = (new SuggestRequest())
            ->setQuery('test')
            ->setCount(null)
        ;

        $this->assertNull($request->getCount());
    }

    public function testSuggestRequestAcceptsHighCount(): void
    {
        $request = (new SuggestRequest())
            ->setQuery('test')
            ->setCount(100)
        ;

        $this->assertSame(100, $request->getCount());
    }

    public function testSuggestAddressRequestFluentInterface(): void
    {
        $request = (new SuggestAddressRequest())
            ->setQuery('санкт-петербург невский')
            ->setCount(3)
        ;

        $this->assertSame('санкт-петербург невский', $request->getQuery());
        $this->assertSame(3, $request->getCount());
    }

    public function testRecordStringFluentInterface(): void
    {
        $record = (new RecordString())
            ->setStructure(['ADDRESS', 'NAME'])
            ->setData([['addr1', 'name1'], ['addr2', 'name2']])
        ;

        $this->assertSame(['ADDRESS', 'NAME'], $record->getStructure());
        $this->assertCount(2, $record->getData());
    }

    public function testUtf8QueryIsPreservedInRequest(): void
    {
        $client = SuggestionsClientFactory::create('token', 'secret');
        $client->suggestEmail(
            (new SuggestRequest())->setQuery('мария@пример.рф'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $rawBody = (string) RecordingHttpClient::lastRequest()->getBody();
        $decoded = json_decode($rawBody, true);
        $this->assertSame('мария@пример.рф', $decoded['query']);
    }

    public function testClearAddressAcceptsMultipleInputs(): void
    {
        $client = ClearClientFactory::create('token', 'secret');
        $client->cleanAddress(
            ['мск сухонская 11', 'спб невский 1', 'екатеринбург ленина 1'],
            ClearClient::FETCH_RESPONSE
        );

        $body = json_decode((string) RecordingHttpClient::lastRequest()->getBody(), true);
        $this->assertCount(3, $body);
    }

    public function testRequestBodyIsValidJson(): void
    {
        $client = SuggestionsClientFactory::create('token', 'secret');
        $client->suggestEmail(
            (new SuggestRequest())->setQuery('test@')->setCount(10),
            SuggestionsClient::FETCH_RESPONSE
        );

        $rawBody = (string) RecordingHttpClient::lastRequest()->getBody();
        $decoded = json_decode($rawBody, true);

        $this->assertSame(JSON_ERROR_NONE, json_last_error(), 'Request body must be valid JSON');
        $this->assertIsArray($decoded);
        $this->assertArrayHasKey('query', $decoded);
    }
}

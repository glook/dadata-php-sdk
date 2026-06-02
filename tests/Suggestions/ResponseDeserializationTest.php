<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Suggestions;

use Glook\Dadata\DadataClientFactory;
use Glook\Dadata\Generated\Suggestions\Client as SuggestionsClient;
use Glook\Dadata\Generated\Suggestions\Model\SuggestAddressRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseAddress;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseEmail;
use Glook\Dadata\Tests\Support\ClientTestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * @internal
 *
 * @coversNothing
 */
final class ResponseDeserializationTest extends ClientTestCase
{
    /** @var SuggestionsClient */
    private $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = DadataClientFactory::createSuggestionsClient('test-token', 'test-secret');
    }

    public function testFetchResponseReturnsPsrResponse(): void
    {
        $this->mockJsonResponse('{"suggestions":[]}');

        $result = $this->client->suggestEmail(
            (new SuggestRequest())->setQuery('test@'),
            SuggestionsClient::FETCH_RESPONSE
        );

        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testFetchObjectReturnsSuggestResponseEmail(): void
    {
        $this->mockJsonResponse('{"suggestions":[]}');

        $result = $this->client->suggestEmail(
            (new SuggestRequest())->setQuery('test@'),
            SuggestionsClient::FETCH_OBJECT
        );

        $this->assertInstanceOf(SuggestResponseEmail::class, $result);
    }

    public function testDeserializesEmptySuggestionsArray(): void
    {
        $this->mockJsonResponse('{"suggestions":[]}');

        $result = $this->client->suggestEmail(
            (new SuggestRequest())->setQuery('test@'),
            SuggestionsClient::FETCH_OBJECT
        );

        $this->assertInstanceOf(SuggestResponseEmail::class, $result);
        $this->assertEmpty($result->getSuggestions());
    }

    public function testDeserializesSuggestEmailWithSuggestion(): void
    {
        $this->mockJsonResponse('{"suggestions":[{"value":"test@mail.ru","unrestricted_value":"test@mail.ru","data":{"local":"test","domain":"mail.ru","type":null}}]}');

        $result = $this->client->suggestEmail(
            (new SuggestRequest())->setQuery('test@'),
            SuggestionsClient::FETCH_OBJECT
        );

        $this->assertInstanceOf(SuggestResponseEmail::class, $result);
        $suggestions = $result->getSuggestions();
        $this->assertIsArray($suggestions);
        $this->assertCount(1, $suggestions);
        $this->assertSame('test@mail.ru', $suggestions[0]->getValue());
    }

    public function testDeserializesSuggestAddressWithNullableFields(): void
    {
        $this->mockJsonResponse('{"suggestions":[{"value":"г Москва, ул Сухонская, д 11","unrestricted_value":"г Москва, ул Сухонская, д 11","data":{"city":"Москва","street":"Сухонская","house":"11","flat":null,"kladr_id":null}}]}');

        $result = $this->client->suggestAddress(
            (new SuggestAddressRequest())->setQuery('москва'),
            SuggestionsClient::FETCH_OBJECT
        );

        $this->assertInstanceOf(SuggestResponseAddress::class, $result);
        $suggestions = $result->getSuggestions();
        $this->assertIsArray($suggestions);
        $this->assertCount(1, $suggestions);
    }
}

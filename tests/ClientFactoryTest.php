<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests;

use Glook\Dadata\ClearClientFactory;
use Glook\Dadata\Generated\Clear\Client as ClearClient;
use Glook\Dadata\Generated\Suggestions\Client as SuggestionsClient;
use Glook\Dadata\Generated\Suggestions\Model\SuggestRequest;
use Glook\Dadata\SuggestionsClientFactory;
use Http\Client\Common\Plugin;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Discovery\Strategy\DiscoveryStrategy;
use Http\Promise\Promise;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * @internal
 *
 * @coversNothing
 */
final class ClientFactoryTest extends TestCase
{
    /** @var string[] */
    private $discoveryStrategies = [];

    protected function setUp(): void
    {
        parent::setUp();

        $this->discoveryStrategies = iterator_to_array(Psr18ClientDiscovery::getStrategies());
        Psr18ClientDiscovery::prependStrategy(TestPsr18ClientDiscoveryStrategy::class);
        RecordingHttpClient::reset();
    }

    protected function tearDown(): void
    {
        Psr18ClientDiscovery::setStrategies($this->discoveryStrategies);

        parent::tearDown();
    }

    public function testSuggestionsFactoryCreatesAuthenticatedClientWithAdditionalPlugins(): void
    {
        $client = SuggestionsClientFactory::create('api-token', 'secret-key', [
            new HeaderPlugin('X-Test-Plugin', 'enabled'),
        ]);

        $this->assertInstanceOf(SuggestionsClient::class, $client);

        $client->suggestEmail(
            (new SuggestRequest())->setQuery('maria@')->setCount(5),
            SuggestionsClient::FETCH_RESPONSE
        );

        $request = RecordingHttpClient::lastRequest();

        $this->assertSame('https://suggestions.dadata.ru/suggestions/api/4_1/rs/suggest/email', (string) $request->getUri());
        $this->assertSame('Token api-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('secret-key', $request->getHeaderLine('X-Secret'));
        $this->assertSame('enabled', $request->getHeaderLine('X-Test-Plugin'));
    }

    public function testClearFactoryCreatesAuthenticatedClientWithAdditionalPlugins(): void
    {
        $client = ClearClientFactory::create('api-token', 'secret-key', [
            new HeaderPlugin('X-Test-Plugin', 'enabled'),
        ]);

        $this->assertInstanceOf(ClearClient::class, $client);

        $client->cleanAddress(['мск сухонская 11 89'], ClearClient::FETCH_RESPONSE);

        $request = RecordingHttpClient::lastRequest();

        $this->assertSame('https://cleaner.dadata.ru/api/v1/clean/address', (string) $request->getUri());
        $this->assertSame('Token api-token', $request->getHeaderLine('Authorization'));
        $this->assertSame('secret-key', $request->getHeaderLine('X-Secret'));
        $this->assertSame('enabled', $request->getHeaderLine('X-Test-Plugin'));
    }
}

final class TestPsr18ClientDiscoveryStrategy implements DiscoveryStrategy
{
    public static function getCandidates($type): array
    {
        if (ClientInterface::class !== $type) {
            return [];
        }

        return [
            [
                'class' => RecordingHttpClient::class,
                'condition' => RecordingHttpClient::class,
            ],
        ];
    }
}

final class RecordingHttpClient implements ClientInterface
{
    /** @var null|RequestInterface */
    private static $lastRequest;

    public static function reset(): void
    {
        self::$lastRequest = null;
    }

    public static function lastRequest(): RequestInterface
    {
        TestCase::assertNotNull(self::$lastRequest);

        return self::$lastRequest;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        self::$lastRequest = $request;

        return new Response(200, ['Content-Type' => 'application/json'], '{"suggestions":[]}');
    }
}

final class HeaderPlugin implements Plugin
{
    /** @var string */
    private $header;

    /** @var string */
    private $value;

    public function __construct(string $header, string $value)
    {
        $this->header = $header;
        $this->value = $value;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        return $next($request->withHeader($this->header, $this->value));
    }
}

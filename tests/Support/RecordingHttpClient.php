<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Support;

use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class RecordingHttpClient implements ClientInterface
{
    /** @var null|RequestInterface */
    private static $lastRequest;

    /** @var ResponseInterface */
    private static $nextResponse;

    public static function reset(): void
    {
        self::$lastRequest = null;
        self::$nextResponse = new Response(200, ['Content-Type' => 'application/json'], '[]');
    }

    public static function setNextResponse(ResponseInterface $response): void
    {
        self::$nextResponse = $response;
    }

    public static function lastRequest(): RequestInterface
    {
        TestCase::assertNotNull(self::$lastRequest, 'No HTTP request was recorded');

        return self::$lastRequest;
    }

    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        self::$lastRequest = $request;

        return self::$nextResponse ?? new Response(200, ['Content-Type' => 'application/json'], '[]');
    }
}

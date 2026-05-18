<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Support;

use Http\Discovery\Psr18ClientDiscovery;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;

abstract class ClientTestCase extends TestCase
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

    protected function mockJsonResponse(string $body, int $status = 200): void
    {
        RecordingHttpClient::setNextResponse(
            new Response($status, ['Content-Type' => 'application/json'], $body)
        );
    }
}

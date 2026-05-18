<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Support;

use Http\Discovery\Strategy\DiscoveryStrategy;
use Psr\Http\Client\ClientInterface;

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

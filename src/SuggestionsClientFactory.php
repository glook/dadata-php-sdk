<?php

declare(strict_types=1);

namespace Glook\Dadata;

use Glook\Dadata\Generated\Suggestions\Authentication\DadataAuthorizationAuthentication;
use Glook\Dadata\Generated\Suggestions\Authentication\DadataSecretAuthentication;
use Glook\Dadata\Generated\Suggestions\Client;
use Http\Client\Common\Plugin;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

final class SuggestionsClientFactory
{
    private function __construct() {}

    /**
     * @param Plugin[] $additionalPlugins
     */
    public static function create(string $token, string $secret, array $additionalPlugins = []): Client
    {
        return Client::create(null, array_merge([
            new AuthenticationRegistry([
                new DadataAuthorizationAuthentication('Token '.$token),
                new DadataSecretAuthentication($secret),
            ]),
        ], $additionalPlugins));
    }
}

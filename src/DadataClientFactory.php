<?php

namespace Glook\Dadata;

use Glook\Dadata\Generated\Clear as ClearEndpoint;
use Glook\Dadata\Generated\Suggestions as SuggestionsEndpoint;
use Http\Client\Common\Plugin;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

final class DadataClientFactory
{
    private function __construct() {}

    /**
     * Create clear endpoint client.
     *
     * @see https://dadata.ru/api/clean/
     *
     * @param Plugin[] $additionalPlugins
     */
    public static function createClearClient(string $token, string $secret, array $additionalPlugins = []): ClearEndpoint\Client
    {
        return ClearEndpoint\Client::create(null, array_merge([
            new AuthenticationRegistry([
                new ClearEndpoint\Authentication\DadataAuthorizationAuthentication('Token '.$token),
                new ClearEndpoint\Authentication\DadataSecretAuthentication($secret),
            ]),
        ], $additionalPlugins));
    }

    /**
     * Create suggestions endpoint client.
     *
     * @see https://dadata.ru/api/suggest/
     *
     * @param Plugin[] $additionalPlugins
     */
    public static function createSuggestionsClient(string $token, string $secret, array $additionalPlugins = []): SuggestionsEndpoint\Client
    {
        return SuggestionsEndpoint\Client::create(null, array_merge([
            new AuthenticationRegistry([
                new SuggestionsEndpoint\Authentication\DadataAuthorizationAuthentication('Token '.$token),
                new SuggestionsEndpoint\Authentication\DadataSecretAuthentication($secret),
            ]),
        ], $additionalPlugins));
    }
}

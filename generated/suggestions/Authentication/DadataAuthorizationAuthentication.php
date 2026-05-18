<?php

namespace Glook\Dadata\Generated\Suggestions\Authentication;

use Jane\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

class DadataAuthorizationAuthentication implements AuthenticationPlugin
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        return $request->withHeader('Authorization', $this->{'apiKey'});
    }

    public function getScope(): string
    {
        return 'DadataAuthorization';
    }
}

<?php

namespace Glook\Dadata\Generated\Suggestions\Endpoint;

use Glook\Dadata\Generated\Suggestions\Exception\UnexpectedStatusCodeException;
use Glook\Dadata\Generated\Suggestions\Model\SuggestFioRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseFio;
use Glook\Dadata\Generated\Suggestions\Runtime\Client\BaseEndpoint;
use Glook\Dadata\Generated\Suggestions\Runtime\Client\Endpoint;
use Glook\Dadata\Generated\Suggestions\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class SuggestFio extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    public function __construct(SuggestFioRequest $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/api/4_1/rs/suggest/fio';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof SuggestFioRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['DadataAuthorization', 'DadataSecret'];
    }

    /**
     * @return null|SuggestResponseFio
     *
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Glook\Dadata\Generated\Suggestions\Model\SuggestResponseFio', 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}

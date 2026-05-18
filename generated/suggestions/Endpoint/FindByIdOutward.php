<?php

namespace Glook\Dadata\Generated\Suggestions\Endpoint;

use Glook\Dadata\Generated\Suggestions\Exception\UnexpectedStatusCodeException;
use Glook\Dadata\Generated\Suggestions\Model\SuggestRequest;
use Glook\Dadata\Generated\Suggestions\Model\SuggestResponseObject;
use Glook\Dadata\Generated\Suggestions\Runtime\Client\BaseEndpoint;
use Glook\Dadata\Generated\Suggestions\Runtime\Client\Endpoint;
use Glook\Dadata\Generated\Suggestions\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class FindByIdOutward extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $name;

    public function __construct(string $name, SuggestRequest $requestBody)
    {
        $this->name = $name;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{name}'], [$this->name], '/api/4_1/rs/findById/{name}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof SuggestRequest) {
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
     * @return null|SuggestResponseObject
     *
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Glook\Dadata\Generated\Suggestions\Model\SuggestResponseObject', 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}

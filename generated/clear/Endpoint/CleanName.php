<?php

namespace Glook\Dadata\Generated\Clear\Endpoint;

use Glook\Dadata\Generated\Clear\Exception\UnexpectedStatusCodeException;
use Glook\Dadata\Generated\Clear\Model\DadataError;
use Glook\Dadata\Generated\Clear\Model\Name;
use Glook\Dadata\Generated\Clear\Runtime\Client\BaseEndpoint;
use Glook\Dadata\Generated\Clear\Runtime\Client\Endpoint;
use Glook\Dadata\Generated\Clear\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CleanName extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param string[] $requestBody
     */
    public function __construct(array $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/api/v1/clean/name';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if (is_array($this->body) and isset($this->body[0]) and is_string($this->body[0])) {
            return [['Content-Type' => ['application/json']], json_encode($this->body)];
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
     * @return null|DadataError|Name[]
     *
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Glook\Dadata\Generated\Clear\Model\Name[]', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'Glook\Dadata\Generated\Clear\Model\DadataError', 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}

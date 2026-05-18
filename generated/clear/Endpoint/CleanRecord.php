<?php

namespace Glook\Dadata\Generated\Clear\Endpoint;

use Glook\Dadata\Generated\Clear\Exception\UnexpectedStatusCodeException;
use Glook\Dadata\Generated\Clear\Model\DadataError;
use Glook\Dadata\Generated\Clear\Model\RecordEntity;
use Glook\Dadata\Generated\Clear\Model\RecordString;
use Glook\Dadata\Generated\Clear\Runtime\Client\BaseEndpoint;
use Glook\Dadata\Generated\Clear\Runtime\Client\Endpoint;
use Glook\Dadata\Generated\Clear\Runtime\Client\EndpointTrait;
use Symfony\Component\Serializer\SerializerInterface;

class CleanRecord extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    public function __construct(RecordString $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/api/v1/clean';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof RecordString) {
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
     * @return null|DadataError|RecordEntity
     *
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(string $body, int $status, SerializerInterface $serializer, ?string $contentType = null)
    {
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'Glook\Dadata\Generated\Clear\Model\RecordEntity', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'Glook\Dadata\Generated\Clear\Model\DadataError', 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}

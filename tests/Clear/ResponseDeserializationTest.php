<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Clear;

use Glook\Dadata\ClearClientFactory;
use Glook\Dadata\Generated\Clear\Client as ClearClient;
use Glook\Dadata\Generated\Clear\Model\Address;
use Glook\Dadata\Generated\Clear\Model\Email;
use Glook\Dadata\Generated\Clear\Model\Name;
use Glook\Dadata\Generated\Clear\Model\Phone;
use Glook\Dadata\Tests\Support\ClientTestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * @internal
 *
 * @coversNothing
 */
final class ResponseDeserializationTest extends ClientTestCase
{
    /** @var ClearClient */
    private $client;

    protected function setUp(): void
    {
        parent::setUp();
        $this->client = ClearClientFactory::create('test-token', 'test-secret');
    }

    public function testFetchResponseReturnsPsrResponse(): void
    {
        $this->mockJsonResponse('[{}]');

        $result = $this->client->cleanAddress(['мск'], ClearClient::FETCH_RESPONSE);

        $this->assertInstanceOf(ResponseInterface::class, $result);
    }

    public function testDeserializesAddressArray(): void
    {
        $this->mockJsonResponse('[{"source":"мск сухонская 11","result":"г Москва, ул Сухонская, д 11","city":"Москва","street":"Сухонская","house":"11","flat":null}]');

        $result = $this->client->cleanAddress(['мск сухонская 11'], ClearClient::FETCH_OBJECT);

        $this->assertIsArray($result);
        $this->assertCount(1, $result);
        $this->assertInstanceOf(Address::class, $result[0]);
    }

    public function testDeserializesNameArray(): void
    {
        $this->mockJsonResponse('[{"source":"иванов иван иванович","result":"Иванов Иван Иванович","surname":"Иванов","name":"Иван","patronymic":"Иванович","gender":"М"}]');

        $result = $this->client->cleanName(['иванов иван иванович'], ClearClient::FETCH_OBJECT);

        $this->assertIsArray($result);
        $this->assertCount(1, $result);
        $this->assertInstanceOf(Name::class, $result[0]);
    }

    public function testDeserializesPhoneArray(): void
    {
        $this->mockJsonResponse('[{"source":"+7 999 999 99 99","phone":"+79999999999","type":"Мобильный"}]');

        $result = $this->client->cleanPhone(['+7 999 999 99 99'], ClearClient::FETCH_OBJECT);

        $this->assertIsArray($result);
        $this->assertCount(1, $result);
        $this->assertInstanceOf(Phone::class, $result[0]);
    }

    public function testDeserializesEmailArray(): void
    {
        $this->mockJsonResponse('[{"source":"test@mail.ru","email":"test@mail.ru","local":"test","domain":"mail.ru"}]');

        $result = $this->client->cleanEmail(['test@mail.ru'], ClearClient::FETCH_OBJECT);

        $this->assertIsArray($result);
        $this->assertCount(1, $result);
        $this->assertInstanceOf(Email::class, $result[0]);
    }

    public function testDeserializesEmptyArray(): void
    {
        $this->mockJsonResponse('[]');

        $result = $this->client->cleanAddress([], ClearClient::FETCH_OBJECT);

        $this->assertIsArray($result);
        $this->assertEmpty($result);
    }
}

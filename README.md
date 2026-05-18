# Dadata API SDK

Typed PHP SDK for [Dadata API](https://dadata.ru/api/) generated from OpenAPI schemas.

The package exposes two generated clients:

- `Glook\Dadata\Generated\Suggestions\Client` for Suggestions API.
- `Glook\Dadata\Generated\Clear\Client` for Cleaner API.

For normal usage, create clients through the package factories instead of wiring HTTP clients and authentication plugins by hand.

## Installation

```sh
composer require glook/dadata-api-sdk
```

Requirements:

- PHP 7.4 or newer
- `ext-json`
- A PSR-18 HTTP client available through `php-http/discovery`

If your application does not already provide a PSR-18 client, install one explicitly:

```sh
composer require symfony/http-client
```

## Authentication

Dadata requires an API token and a secret key.

The factories add both generated authentication plugins automatically:

```php
new AuthenticationRegistry([
    new DadataAuthorizationAuthentication('Token '.$token),
    new DadataSecretAuthentication($secret),
])
```

You only need to pass raw credentials:

```php
use Glook\Dadata\ClearClientFactory;
use Glook\Dadata\SuggestionsClientFactory;

$token = 'Replace with Dadata API key';
$secret = 'Replace with Dadata secret key';

$suggestions = SuggestionsClientFactory::create($token, $secret);
$clear = ClearClientFactory::create($token, $secret);
```

## HTTP Plugins

Factories accept an optional list of extra `Http\Client\Common\Plugin` instances.
Authentication is always registered first, then your plugins are appended.

```php
use Glook\Dadata\SuggestionsClientFactory;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\RetryPlugin;

$client = SuggestionsClientFactory::create($token, $secret, [
    new RetryPlugin(['retries' => 2]),
    new HeaderDefaultsPlugin([
        'User-Agent' => 'my-application/1.0',
    ]),
]);
```

This is the recommended extension point for retries, logging, caching, tracing, rate limiting, custom headers, and framework-specific integrations.

## Fetch Modes

Generated methods return typed model objects by default:

```php
$response = $client->suggestAddress($request);
```

To get the raw PSR-7 response instead, pass `Client::FETCH_RESPONSE`:

```php
use Glook\Dadata\Generated\Suggestions\Client;

$response = $client->suggestAddress($request, Client::FETCH_RESPONSE);
```

## Suggestions API

Create a Suggestions client:

```php
use Glook\Dadata\SuggestionsClientFactory;

$client = SuggestionsClientFactory::create($token, $secret);
```

### Suggest Address

```php
use Glook\Dadata\Generated\Suggestions\Model\SuggestAddressRequest;

$request = (new SuggestAddressRequest())
    ->setQuery('самара метал')
    ->setCount(5);

$response = $client->suggestAddress($request);

foreach ($response->getSuggestions() ?? [] as $suggestion) {
    echo $suggestion->getValue().PHP_EOL;
}
```

### Suggest Address in English

```php
use Glook\Dadata\Generated\Suggestions\Model\SuggestAddressRequest;

$request = (new SuggestAddressRequest())
    ->setQuery('samara metal')
    ->setCount(5)
    ->setLanguage('en');

$response = $client->suggestAddress($request);
```

### Find Address by FIAS or KLADR ID

```php
use Glook\Dadata\Generated\Suggestions\Model\FindAddressByIdRequest;

$request = (new FindAddressByIdRequest())
    ->setQuery('9120b43f-2fae-4838-a144-85e43c2bfb29')
    ->setCount(1);

$response = $client->findByIdAddress($request);
```

### Reverse Geocode Address

```php
use Glook\Dadata\Generated\Suggestions\Model\GeoLocateAddressRequest;

$request = (new GeoLocateAddressRequest())
    ->setLat(55.878)
    ->setLon(37.653)
    ->setRadiusMeters(1000)
    ->setCount(5);

$response = $client->geoLocateAddress($request);
```

### Find Company by INN

```php
use Glook\Dadata\Generated\Suggestions\Model\FindPartyByIdRequest;

$request = (new FindPartyByIdRequest())
    ->setQuery('7707083893')
    ->setCount(5);

$response = $client->findByIdParty($request);
```

Find by INN and KPP:

```php
$request = (new FindPartyByIdRequest())
    ->setQuery('7707083893')
    ->setKpp('540602001')
    ->setCount(1);

$response = $client->findByIdParty($request);
```

### Suggest Company

```php
use Glook\Dadata\Generated\Suggestions\Model\SuggestPartyRequest;

$request = (new SuggestPartyRequest())
    ->setQuery('сбер')
    ->setCount(5);

$response = $client->suggestParty($request);
```

### Suggest Bank

```php
use Glook\Dadata\Generated\Suggestions\Model\SuggestBankRequest;

$request = (new SuggestBankRequest())
    ->setQuery('ти')
    ->setCount(5);

$response = $client->suggestBank($request);
```

### Suggest Email

```php
use Glook\Dadata\Generated\Suggestions\Model\SuggestRequest;

$request = (new SuggestRequest())
    ->setQuery('maria@')
    ->setCount(5);

$response = $client->suggestEmail($request);
```

### Suggestions Methods

| Method | Dadata area |
| --- | --- |
| `suggestAddress(SuggestAddressRequest $request)` | Address suggestions |
| `suggestParty(SuggestPartyRequest $request)` | Company suggestions |
| `suggestBank(SuggestBankRequest $request)` | Bank suggestions |
| `suggestEmail(SuggestRequest $request)` | Email suggestions |
| `suggestFio(SuggestFioRequest $request)` | Personal name suggestions |
| `suggestFias(SuggestFiasRequest $request)` | FIAS suggestions |
| `suggestOutward(string $name, SuggestOutwardRequest $request)` | Generic suggest endpoint |
| `findByIdAddress(FindAddressByIdRequest $request)` | Find address by ID |
| `findByIdParty(FindPartyByIdRequest $request)` | Find company by INN/OGRN |
| `findByIdBank(FindBankByIdRequest $request)` | Find bank by BIC, SWIFT, INN, or registration number |
| `findByIdFias(FindFiasByIdRequest $request)` | Find address strictly by FIAS |
| `findByIdDelivery(SuggestRequest $request)` | Delivery city IDs |
| `findByEmailCompany(SuggestRequest $request)` | Find company by email |
| `findAffiliatedParty(FindAffiliatedPartyRequest $request)` | Find affiliated companies |
| `geoLocateAddress(GeoLocateAddressRequest $request)` | Reverse geocode address |
| `geoLocateOutward(string $name, GeoLocateOutwardRequest $request)` | Generic geolocate endpoint |
| `ipLocateAddress(IpLocateAddressRequest $request)` | GeoIP address lookup |
| `findByIdOutward(string $name, SuggestRequest $request)` | Generic find-by-id endpoint |

## Cleaner API

Create a Cleaner client:

```php
use Glook\Dadata\ClearClientFactory;

$client = ClearClientFactory::create($token, $secret);
```

### Clean Address

Cleaner methods accept arrays of strings and return arrays of typed result models.

```php
$addresses = $client->cleanAddress([
    'мск сухонская 11 89',
]);

foreach ($addresses ?? [] as $address) {
    echo $address->getResult().PHP_EOL;
    echo $address->getPostalCode().PHP_EOL;
}
```

### Clean Name

```php
$names = $client->cleanName([
    'Срегей владимерович иванов',
]);

foreach ($names ?? [] as $name) {
    echo $name->getResult().PHP_EOL;
}
```

### Clean Phone

```php
$phones = $client->cleanPhone([
    '9168-233-454',
]);

foreach ($phones ?? [] as $phone) {
    echo $phone->getPhone().PHP_EOL;
}
```

### Clean Email

```php
$emails = $client->cleanEmail([
    'serega@yandex/ru',
]);

foreach ($emails ?? [] as $email) {
    echo $email->getEmail().PHP_EOL;
}
```

### Clean Composite Record

Use `cleanRecord()` when one input row contains multiple fields.

```php
use Glook\Dadata\Generated\Clear\Model\RecordString;

$request = (new RecordString())
    ->setStructure(['NAME', 'PHONE', 'EMAIL'])
    ->setData([
        ['Срегей владимерович иванов', '9168-233-454', 'serega@yandex/ru'],
    ]);

$response = $client->cleanRecord($request);
```

### Cleaner Methods

| Method | Dadata area |
| --- | --- |
| `cleanAddress(array $values)` | Address cleansing and geocoding |
| `cleanName(array $values)` | Personal name cleansing |
| `cleanPhone(array $values)` | Phone cleansing |
| `cleanEmail(array $values)` | Email cleansing |
| `cleanBirthdate(array $values)` | Birthdate cleansing |
| `cleanPassport(array $values)` | Passport cleansing |
| `cleanVehicle(array $values)` | Vehicle cleansing |
| `cleanAsIs(array $values)` | Return values without cleansing |
| `cleanRecord(RecordString $request)` | Composite record cleansing |

## Error Handling

Generated methods throw `UnexpectedStatusCodeException` when Dadata returns an unexpected HTTP status code.

```php
use Glook\Dadata\Generated\Suggestions\Exception\UnexpectedStatusCodeException;

try {
    $response = $client->suggestAddress($request);
} catch (UnexpectedStatusCodeException $exception) {
    $statusCode = $exception->getCode();
}
```

For Cleaner API imports, use `Glook\Dadata\Generated\Clear\Exception\UnexpectedStatusCodeException`.

## Project Structure

```text
src/
  ClearClientFactory.php
  SuggestionsClientFactory.php
generated/
  clear/
  suggestions/
schemas/
  clear.yml
  suggestions.yml
config/
  clear-config.php
  suggestions-config.php
```

- `src/` contains hand-written public entry points.
- `generated/` contains JanePHP-generated SDK code and is committed to the package.
- `schemas/` contains OpenAPI schemas used for generation.
- `config/` contains JanePHP generator configuration.

## Development

Install dependencies:

```sh
composer install
```

Run checks:

```sh
composer check
```

Regenerate clients from schemas:

```sh
composer generate:all
```

Generate only one client:

```sh
composer generate:suggestions
composer generate:clear
```

After generation, review generated code and commit it together with schema/config changes.

## License

MIT

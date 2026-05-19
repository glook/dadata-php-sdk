<?php

declare(strict_types=1);

$aliases = [
    'Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry' => 'Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry',
    'Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin' => 'Jane\OpenApiRuntime\Client\AuthenticationPlugin',
    'Jane\Component\OpenApiRuntime\Client\Exception\InvalidFetchModeException' => 'Jane\OpenApiRuntime\Client\Exception\InvalidFetchModeException',
    'Jane\Component\JsonSchemaRuntime\Reference' => 'Jane\JsonSchemaRuntime\Reference',
];

foreach ($aliases as $modern => $legacy) {
    if (class_exists($legacy, false) || interface_exists($legacy, false)) {
        continue;
    }
    if (class_exists($modern) || interface_exists($modern)) {
        class_alias($modern, $legacy);
    }
}

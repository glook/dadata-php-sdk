<?php

declare(strict_types=1);

return [
    'openapi-file' => dirname(__DIR__) . '/schemas/suggestions.yml',
    'namespace' => 'Glook\Dadata\Generated\Suggestions',
    'directory' => dirname(__DIR__) . '/generated/suggestions',
    'strict' => true,
    'skip-null-values' => true,
    'skip-required-fields' => false,
    'throw-unexpected-status-code' => true,
    'clean-generated' => true,
    'use-fixer' => true,
    'full-date-format' => 'Y-m-d',
    'date-format' => 'Y-m-d\TH:i:s',
];

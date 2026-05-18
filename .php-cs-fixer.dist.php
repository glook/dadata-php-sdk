<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

return (new Config())
    ->setRiskyAllowed(false)
    ->setRules([
        '@auto' => true,
        '@PhpCsFixer' => true,
    ])
    ->setFinder(
        (new Finder())
            ->in(__DIR__ . '/config')
            ->in(__DIR__ . '/src')
            ->in(__DIR__ . '/tests')
            ->in(__DIR__ . '/generated')
    );

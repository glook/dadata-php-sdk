<?php

declare(strict_types=1);

namespace Glook\Dadata\Tests\Support;

use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;

final class HeaderPlugin implements Plugin
{
    /** @var string */
    private $header;

    /** @var string */
    private $value;

    public function __construct(string $header, string $value)
    {
        $this->header = $header;
        $this->value = $value;
    }

    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        return $next($request->withHeader($this->header, $this->value));
    }
}

<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array|string|null
     */
    protected $proxies = '*'; // Use '*' to trust all proxies

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = \Illuminate\Http\Request::HEADER_FORWARDED;


}

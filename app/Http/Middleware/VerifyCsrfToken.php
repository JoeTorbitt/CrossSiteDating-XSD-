<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{

    protected $addHttpOperatorToAttributes = false;
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'csrf/csrf', 'change-email', 'csrf',
    ];

    protected $addHttpOperatorToAttributes = false;
}

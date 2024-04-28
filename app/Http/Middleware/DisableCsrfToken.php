<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifyCsrfToken;

class DisableCsrfToken extends BaseVerifyCsrfToken
{

 
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'csrf/csrf', // Add the name of your CSRF route here
    ];

   
}
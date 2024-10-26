<?php

namespace App\Http;

use Illuminate\Foundation\Configuration\Middleware;

class AppMiddleware
{
    public function __invoke(Middleware $middleware)
    {
        $middleware->appendToGroup('web', \App\Http\Middleware\MyMiddleware::class);
    }
}


// protected $middleware = [
//     // \App\Http\Middleware\TrustHosts::class,
//     \App\Http\Middleware\TrustProxies::class,
//     \Illuminate\Http\Middleware\HandleCors::class,
//     \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
//     \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
//     \App\Http\Middleware\TrimStrings::class,
//     \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
// ];

// /**
//  * The application's route middleware groups.
//  *
//  * @var array<string, array<int, class-string|string>>
//  */
// protected $middlewareGroups = [
//     'web' => [
//         \App\Http\Middleware\EncryptCookies::class,
//         \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
//         \Illuminate\Session\Middleware\StartSession::class,
//         \Illuminate\View\Middleware\ShareErrorsFromSession::class,
//         \App\Http\Middleware\VerifyCsrfToken::class,
//         \Illuminate\Routing\Middleware\SubstituteBindings::class,

//     ],

//     'ensure.two.factor.authenticated' => [
//         \App\Http\Middleware\EnsureTwoFactorAuthenticated::class
//     ],

//     'api' => [
//         // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
//         \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
//         \Illuminate\Routing\Middleware\SubstituteBindings::class,
//     ],
// ];

// /**
//  * The application's middleware aliases.
//  *
//  * Aliases may be used instead of class names to conveniently assign middleware to routes and groups.
//  *
//  * @var array<string, class-string|string>
//  */
// protected $middlewareAliases = [
//     'auth' => \App\Http\Middleware\Authenticate::class,
//     'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
//     'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
//     'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
//     'can' => \Illuminate\Auth\Middleware\Authorize::class,
//     'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
//     'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
//     'precognitive' => \Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests::class,
//     'signed' => \App\Http\Middleware\ValidateSignature::class,
//     'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
//     'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
//     'NoRistoratore' => \App\Http\Middleware\RistoratoreMiddleware::class,
//     'NoFornitore' => \App\Http\Middleware\FornitoreMiddleware::class,
//     'NoCollaboratore' => \App\Http\Middleware\CollaboratoreMiddleware::class,
// ];

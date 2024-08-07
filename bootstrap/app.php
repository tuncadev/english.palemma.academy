<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CacheVideo;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append:[
            App\Http\Middleware\LocalizationMiddleware::class,
          ]);
        $middleware->append(CacheVideo::class);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

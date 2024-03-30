<?php

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Spatie\Permission\Middleware\RoleMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\Permission\Exceptions\UnauthorizedException;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            'role_or_permission' => RoleOrPermissionMiddleware::class
        ]);

        $middleware->redirectUsersTo(
           fn() => url()->previous()
        );

        $middleware->redirectGuestsTo(
            fn() => route('login')
        );
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable(function (UnauthorizedException $e) {
            return redirect()->to(url()->previous());
        });

        $exceptions->renderable(function (NotFoundHttpException $e) {
            return redirect()->to(url()->previous());
        });
    })->create();

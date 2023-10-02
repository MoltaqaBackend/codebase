<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\Exceptions\MissingAbilityException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Broadcasting\BroadcastException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if ($request->is('api/*') || $request->wantsJson()) {
            if ($exception->getMessage() == "Unauthenticated.") {
                $error = ['unauthenticated' => [$exception->getMessage()]];
                $message = $exception->getMessage();
                return apiErrors($error, [], $message, 401);
            }
            if ($exception instanceof AuthenticationException) {
                $error = ['unauthenticated' => [$exception->getMessage()]];
                $message = $exception->getMessage();
                return apiErrors($error, [], $message, 401);
            }
            if ($exception instanceof HttpException) {
                $error = ['failed' => [$exception->getMessage()]];
                $message = $exception->getMessage();
                return apiErrors($error, [], $message, $exception->getStatusCode());
            }
            if ($exception instanceof ValidationException) {
                $errors = $exception->errors();
                $message = reset($errors);
                return apiErrors($errors, [], $message, 422);
            }
            if ($exception instanceof MissingAbilityException) {
                $error = ['failed' => [$exception->getMessage()]];
                $message = $exception->getMessage();
                return apiErrors($error, [], $message, 403);
            }
            if($exception instanceof BroadcastException){
                $message = $exception->getMessage();
                $error = ['failed' => [$message]];
                return apiErrors($error, [], $message, $exception->getCode() ?? 404);
            }
        }
        return parent::render($request, $exception);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class ValidationExceptionHandler
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $exception = $response->exception;
        if($exception){
            if($exception instanceof ValidationException){
                return response()->json([
                    'message' => $exception->getMessage(),
                    'error' => $exception->errors()
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }

        return $response;
    }
}

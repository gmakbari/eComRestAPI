<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
            $this->renderable(function (InvalidOrderException $e, $request) {
                return response()->view('errors.invalid-order', [], 500);
            });
    }

    // public function render($request, Exception $e)
    // {
    //     $error =$e->getMessage();

    //     //do your stuff with the error message 

    //     return parent::render($request, $exception);
    // }


    
}

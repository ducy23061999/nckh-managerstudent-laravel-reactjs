<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
	];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
           
            \App\Http\Middleware\App::class,
        ],
        'api' => [
            'throttle:60,1',
        ],
        'authhome' =>[
             \App\Http\Middleware\IsAdmin::class,
            \App\Http\Middleware\IsRedactor::class,
            \App\Http\Middleware\IsUser::class,
        ],
    ];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'admin' => \App\Http\Middleware\IsAdmin::class,
        'user'=> \App\Http\Middleware\IsUser::class,
            
		'redac' => \App\Http\Middleware\IsRedactor::class,
		'ajax' => \App\Http\Middleware\IsAjax::class
	];

}

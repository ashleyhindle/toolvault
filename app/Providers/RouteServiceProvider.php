<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $urlParts = explode('.', $_SERVER['HTTP_HOST']);
        $subdomain = preg_replace('/[^a-z0-9]/i', '', array_shift($urlParts));
        $subdomainRoutesExist = file_exists(realpath(__DIR__ . '/../../routes/tools/' . $subdomain . '.php'));

        // Load routes for the subdomain/tool if they exist
        // Otherwise show the standard 'filter by tool name' site
        if ($subdomain != 'toolvault' && $subdomainRoutesExist) {
            Route::domain($_SERVER['HTTP_HOST'])
                ->middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/tools/' . $subdomain . '.php'));
        } else {
            $this->mapWebRoutes();
        }
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }
}

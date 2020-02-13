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
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapFamilyRoutes();

        $this->mapManagerRoutes();

        $this->mapDriverRoutes();

        $this->mapParentRoutes();

        //
    }    
    
    /**
     * Define the "parent" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapParentRoutes()
    {
        Route::prefix('parent')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/parent.php'));
    }    
    
    /**
     * Define the "driver" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapDriverRoutes()
    {
        Route::prefix('driver')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/driver.php'));
    }    
    
    /**
     * Define the "manager" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapManagerRoutes()
    {
        Route::prefix('manager')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/manager.php'));
    }    
    
    /**
     * Define the "family" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapFamilyRoutes()
    {
        Route::prefix('family')
             ->middleware(['web'])
             ->namespace($this->namespace)
             ->group(base_path('routes/family.php'));
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

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}

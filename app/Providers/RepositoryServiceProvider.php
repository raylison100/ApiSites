<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\SitesRepository::class, \App\Repositories\SitesRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InputsRepository::class, \App\Repositories\InputsRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\InputTypesRepository::class, \App\Repositories\InputTypesRepositoryEloquent::class);
        //:end-bindings:
    }
}

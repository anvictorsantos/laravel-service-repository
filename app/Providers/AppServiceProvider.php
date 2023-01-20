<?php

namespace App\Providers;

use App\Task;
use Illuminate\Support\ServiceProvider;
use App\Repositories\TaskRepositoryEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\TaskRepositoryInterface', 'App\Repositories\TaskRepositoryEloquent');

        $this->app->bind('App\Repositories\TaskRepositoryInterface', function() {
            return new TaskRepositoryEloquent(new Task());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

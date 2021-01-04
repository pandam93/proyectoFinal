<?php

namespace App\Providers;

use App\Repository\EloquentRepositoryInterface; 
use App\Repository\TaskRepositoryInterface; 
use App\Repository\Eloquent\TaskRepository; 
use App\Repository\Eloquent\BaseRepository; 
use Illuminate\Support\ServiceProvider;

/** 
* Class RepositoryServiceProvider 
* @package App\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    { 
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

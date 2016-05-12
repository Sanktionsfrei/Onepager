<?php

namespace App\Providers;

use App\Repositories\CategoryRepositoryContract;
use App\Repositories\DbCategoryRepository;
use App\Repositories\DbPostRepository;
use App\Repositories\PostRepositoryContract;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostRepositoryContract::class, DbPostRepository::class);
        
        $this->app->bind(CategoryRepositoryContract::class, DbCategoryRepository::class);
    }
}

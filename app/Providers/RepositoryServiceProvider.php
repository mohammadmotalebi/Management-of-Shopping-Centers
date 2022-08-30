<?php

namespace App\Providers;

use App\Repository\LookUpRepository;
use App\Repository\LookUpRepositoryInterface;
use App\Repository\usersRepositoryFolder\usersRepositoryInterface;
use App\Repository\usersRepositoryFolder\usersRepositoryQueries;
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
        $this->app->bind(usersRepositoryInterface::class, usersRepositoryQueries::class);
        $this->app->bind(LookUpRepositoryInterface::class, LookUpRepository::class);
    }
}

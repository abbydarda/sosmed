<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Sosmed\UserServiceInterface;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Services\UserService;
use App\Services\AlbumService;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      $this->app->bind(UserServiceInterface::class, UserService::class);
      $this->app->bind(AlbumServiceInterface::class, AlbumService::class);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Sosmed\UserServiceInterface;
use App\Services\Sosmed\PostServiceInterface;
use App\Services\Sosmed\AlbumServiceInterface;
use App\Services\Sosmed\PhotoServiceInterface;
use App\Services\UserService;
use App\Services\PostService;
use App\Services\AlbumService;
use App\Services\PhotoService;


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
      $this->app->bind(PostServiceInterface::class, PostService::class);
      $this->app->bind(PhotoServiceInterface::class, PhotoService::class);
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Site\BlogRepositoryInterface;
use App\Repositories\Site\BlogRepository;

class SiteServiceProvider extends ServiceProvider {
    public function register(): void {
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
    }

    public function boot(): void {
        //
    }
}

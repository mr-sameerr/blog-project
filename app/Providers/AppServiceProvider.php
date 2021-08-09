<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Blade::component('package-name', PackageNameComponent::class);
        Blade::component('components.badge', 'badge');
        Blade::component('components.tags', 'tags');
        Blade::component('components.updated', 'updated');
        Blade::component('components.comment-form', 'commentForm');
        Blade::component('components.comment-list', 'commentList');
        //Blade::component('components.error', 'error');
    }
}

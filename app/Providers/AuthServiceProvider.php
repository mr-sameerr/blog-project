<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\User'  =>  'App\Policies\UserPolicy',
        'App\Post'  =>  'App\Policies\PostPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::define('update-post', function($user, $post){
        //     return $user->id == $post->user_id;
        // });

        //Gate::resource('post', 'App\Policies\PostPolicy');
        //Gate::define('post.delete', 'App\Policies\PostPolicy@delete');
        
    }
}

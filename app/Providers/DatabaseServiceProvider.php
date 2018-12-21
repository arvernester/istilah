<?php

namespace App\Providers;

use App\Models\Index;
use App\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // observers
        User::observe(\App\Observers\UserObserver::class);
        Index::observe(\App\Observers\IndexObserver::class);

        Relation::morphMap([
            'user' => User::class,
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

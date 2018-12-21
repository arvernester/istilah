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

        // urban dictionary observer
        \App\Models\Urban\Dictionary::observe(\App\Observers\Urban\DictionaryObserver::class);
        \App\Models\Urban\Description::observe(\App\Observers\Urban\DescriptionObserver::class);

        Relation::morphMap([
            'user' => User::class,
            'urban' => \App\Models\Urban\Dictionary::class,
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

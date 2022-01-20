<?php

namespace App\Providers;

use App\View\Composers\UserComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider
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

        // this data with share method available all views
        View::share('any_key', 'We define for global and use in all views');


        // for single view
        View::composer('user1', UserComposer::class);

        // for multiple view
        View::composer(['user1','user2','user3','user4'], UserComposer::class);

    }
}

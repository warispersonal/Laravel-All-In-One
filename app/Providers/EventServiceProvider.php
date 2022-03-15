<?php

namespace App\Providers;

use App\Events\AfterLogin;
use App\Listeners\SaveLoginHistory;
use App\Listeners\SendEmailAfterLogin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = array(
        Registered::class => array(
            SendEmailVerificationNotification::class,
        ),
        OrderShipped::class => array(
            SendShipmentNotification::class,
        ),
        AfterLogin::class => array(
            SaveLoginHistory::class,
            SendEmailAfterLogin::class
        )
    );

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Authenticated;
use App\Listeners\LogSuccessfulLogin;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        parent::boot();

        // Register the listener for the Authenticated event
        Event::listen(Authenticated::class, [LogSuccessfulLogin::class, 'handle']);
    }
}
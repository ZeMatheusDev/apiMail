<?php

namespace libMail\HotmailMailer;

use Illuminate\Support\ServiceProvider;

class HotmailMailerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(HotmailMailer::class, function ($app) {
            return new HotmailMailer();
        });
    }
}
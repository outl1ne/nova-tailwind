<?php

namespace OptimistDigital\Tailwind;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class TailwindServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('nova-tailwind', __DIR__ . '/../dist/tailwind.css');
        });

        // Publish Public CSS for login screen
        $this->publishes([
            __DIR__.'/../dist' => public_path('vendor/optimistdigital/nova-tailwind'),
        ], 'public');
    }
}

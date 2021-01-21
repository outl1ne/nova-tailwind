<?php

namespace OptimistDigital\Tailwind;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;

class TailwindServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $tailwindPublicPath = public_path('vendor/nova-tailwind');

        if (file_exists("{$tailwindPublicPath}/tailwind.css")) {
            Nova::theme('/vendor/nova-tailwind/tailwind.css');
        } else {
            Nova::serving(function (ServingNova $event) {
                Nova::style('nova-tailwind', __DIR__ . '/../dist/tailwind.css');
            });
        }

        // Publish CSS for login screen
        $this->publishes([__DIR__ . '/../dist' => $tailwindPublicPath], 'tailwind-public-css');
    }
}

<?php

namespace OptimistDigital\MultiselectField;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class FieldServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::style('tailwind', __DIR__ . '/../dist/css/tailwind.css');
        });
    }
}

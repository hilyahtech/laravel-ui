<?php

namespace Hilyahtech\Ui;

use Illuminate\Support\ServiceProvider;

class HilyahUiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                HilyahUi::class,
            ]);
        }
    }
}
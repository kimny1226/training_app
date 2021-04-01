<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LessonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'LessonService', // キー名
            'App\Services\LessonService' // クラス名
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

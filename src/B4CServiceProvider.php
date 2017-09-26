<?php

namespace Maksuco\B4C;

use Illuminate\Support\ServiceProvider;

class B4CServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('maksuco-B4C', function () {
          return new B4C();
        });
    }
}

<?php

namespace LaravelViewComponents;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ElementServiceProvider extends LaravelServiceProvider
{
  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->loadViewComponentsAs('element', [
        Components\Element\User\Avatar::class,
        Components\Element\User\InfoBlock::class,
        Components\Element\Progress::class,
        Components\Element\Timeline::class,
    ]);

    $this->loadViewsFrom(__DIR__.'/Views', 'components');
    $this->publishes([
        __DIR__.'/Views' => resource_path('views/vendor/components'),
    ]);
  }
}

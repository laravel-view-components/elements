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
        Components\Element\Progress::class,
    ]);
    $this->loadViewComponentsAs('element-user', [
        Components\Element\User\Avatar::class,
        Components\Element\User\AvatarList::class,
        Components\Element\User\InfoBlock::class,
    ]);
    $this->loadViewComponentsAs('element-timeline', [
        Components\Element\Timeline\Wrapper::class,
        Components\Element\Timeline\Item::class,
    ]);
    $this->loadViewComponentsAs('element-steps', [
        Components\Element\Steps\Wrapper::class,
        Components\Element\Steps\Item::class,
    ]);

    $this->loadViewsFrom(__DIR__.'/Views', 'components');
    $this->publishes([
        __DIR__.'/Views' => resource_path('views/vendor/components'),
    ]);
  }
}

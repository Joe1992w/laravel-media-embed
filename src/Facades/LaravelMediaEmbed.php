<?php

namespace Joe1992w\LaravelMediaEmbed\Facades;

/**
* Class Facade
*/

use Illuminate\Support\Facades\Facade;

class LaravelMediaEmbed extends Facade
{
  /**
  * Get the registered name of the component.
  *
  * @return string
  */
  protected static function getFacadeAccessor()
  {
    return 'Joe1992w\LaravelMediaEmbed\Services\LaravelMediaEmbed';
  }
}

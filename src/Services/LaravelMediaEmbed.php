<?php

namespace Joe1992w\LaravelMediaEmbed\Services;

use MediaEmbed\MediaEmbed;

class LaravelMediaEmbed
{
  public function parse($url = null, $whitelist = [], $params = [], $attributes = []) {

    $MediaEmbed = new MediaEmbed();

    $MediaObject = $MediaEmbed->parseUrl($url);

    if ($MediaObject)
    {

      if(is_array($params))
      {
        $MediaObject->setParam($params);
      }

      if(is_array($params))
      {
        $MediaObject->setAttribute($attributes);
      }


      if (!empty($whitelist))
      {

        if(!in_array($MediaObject->name(), $whitelist))
        {

          return false;

        }

      }

      return $MediaObject;

    }

    return false;

  }

}

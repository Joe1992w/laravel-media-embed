<?php

namespace Joe1992w\LaravelMediaEmbed\Services;

use MediaEmbed\MediaEmbed;

class LaravelMediaEmbed
{
  public function parse($url = null, $whitelist = []) {

    $MediaEmbed = new MediaEmbed();

    $MediaObject = $MediaEmbed->parseUrl($url);

    if ($MediaObject)
    {

      if (!empty($whitelist))
      {

        if(!in_array($MediaObject->name(), $whitelist))
        {

          return false;

        }

      }

      return $MediaObject->getEmbedCode();

    }

    return false;

  }

}

<?php

/*
 * This file is part of Flarum.
 *
 * This extension was created by Billy Wilcosky.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="manifest" href="/site.webmanifest">';
        })
        ->content(function (Document $document) {
            $document->foot[] = '<script>
if ("serviceWorker" in navigator) {
  if (navigator.serviceWorker.controller) {
    console.log("Active service worker found, no need to register");
  } else {
    // Register the service worker
    navigator.serviceWorker
      .register("/sw.js", {
        scope: "/"
      })
      .then(function (reg) {
        console.log("Service worker has been registered for scope: " + reg.scope);
      });
  }
}
</script>';
        })
];

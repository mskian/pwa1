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
            $document->head[] = '<link rel="manifest" href="/assets/extensions/zerosonesfun-pwa/site.webmanifest?v=pwa1"><script> if ('serviceWorker' in navigator) { // register service worker navigator.serviceWorker.register('/assets/extensions/zerosonesfun-pwa/service-worker.js'); }</script>';
        })
];

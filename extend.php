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
            $document->head[] = '<link rel="apple-touch-icon" sizes="180x180" href="/assets/extensions/zerosonesfun-pwa/apple-touch-icon.png?v=pwa1">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/extensions/zerosonesfun-pwa/favicon-32x32.png?v=pwa1">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/extensions/zerosonesfun-pwa/favicon-16x16.png?v=pwa1">
<link rel="manifest" href="/assets/extensions/zerosonesfun-pwa/site.webmanifest?v=pwa1">
<link rel="mask-icon" href="/assets/extensions/zerosonesfun-pwa/safari-pinned-tab.svg?v=pwa1" color="#da532c">
<link rel="shortcut icon" href="/assets/extensions/zerosonesfun-pwa/favicon.ico?v=pwa1">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/assets/extensions/zerosonesfun-pwa/browserconfig.xml?v=pwa1">
<meta name="theme-color" content="#ffffff"><script> if ('serviceWorker' in navigator) { // register service worker navigator.serviceWorker.register('/assets/extensions/zerosonesfun-pwa/service-worker.js'); }</script>';
        })
];

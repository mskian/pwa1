# Flarum PWA

Turns Flarum into a basic progressive web app.

## Manual Install instructions

To install this package:

Extract this package in <code>&lt;web site&gt;/assets/extensions/zerosonesfun-pwa/</code>. If your site is <code>http://www.example.com</code>, you should be able to access a file named <code>http://www.example.com/assets/extensions/zerosonesfun-pwa/favicon.ico</code>.

Insert the following code in the `head` section of your pages:

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/extensions/zerosonesfun-pwa/apple-touch-icon.png?v=pwa1">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/extensions/zerosonesfun-pwa/favicon-32x32.png?v=pwa1">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/extensions/zerosonesfun-pwa/favicon-16x16.png?v=pwa1">
    <link rel="manifest" href="/assets/extensions/zerosonesfun-pwa/site.webmanifest?v=pwa1">
    <link rel="mask-icon" href="/assets/extensions/zerosonesfun-pwa/safari-pinned-tab.svg?v=pwa1" color="#da532c">
    <link rel="shortcut icon" href="/assets/extensions/zerosonesfun-pwa/favicon.ico?v=pwa1">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/assets/extensions/zerosonesfun-pwa/browserconfig.xml?v=pwa1">
    <meta name="theme-color" content="#ffffff">

*Optional* - Check your favicon with the [favicon checker](https://realfavicongenerator.net/favicon_checker)

# Flarum PWA - _Now we're progressive._

Turns Flarum into a basic progressive web app. Upon first site visit it will automatically cache the forum's main JS and CSS files, as well as the entire main page. It will also cache any page/post you visit within the forum. This means that if you lose internet connection you will at least be able to go back and view the posts you recently viewed. However, you can only view these "offline pages" through the app. A positive side effect is that the PWA version of the forum may be faster than the normal version due to all of the caching. Obviously, you cannot do things like reply to posts if you are offline. But, being able to re-visit certain posts offline could be helpful especially if you are right in the middle of learning about something and you lose your connection.

This is what you see in Chrome (on a desktop). Each browser and device will handle this differently.
![](https://i.ibb.co/H4PBm8p/Screenshot-2019-09-28-at-5-27-26-AM.png)

Here is the experience after it is installed on a Chromebook:
https://vimeo.com/362968169

## Install instructions

#### Pre-install:

1. **Required** pre-install step: Add [sw.js](https://github.com/zerosonesfun/pwa/blob/master/assets/sw.js) to the public root of your site (/public_html/, /home/, or whatever your public root is called).
2. **Required** pre-install step: Add [site.webmanifest](https://github.com/zerosonesfun/pwa/blob/master/assets/site.webmanifest) to the public root of your site (/public_html/, /home/, or whatever your public root is called).
3. _Optional_ pre-install step: If you already have a web manifest file for some reason at the public root of your site, remove it.

#### Install:

4. `composer require zerosonesfun/pwa`

5. _Optional_ post-install step: Go to /assets/extensions/zerosonesfun-pwa/ and replace the two images with your logo. Keep the file names and the image sizes the same. If you do not complete this step that is OK. Your app icon will be a nice, simple, black speech bubble.

#### Update:

`composer update zerosonesfun/pwa`

#### Links:
- Github: [https://github.com/zerosonesfun/pwa](https://github.com/zerosonesfun/pwa)
- Packagist: [https://packagist.org/packages/zerosonesfun/pwa](https://packagist.org/packages/zerosonesfun/pwa)
- Me: [https://wilcosky.com](https://wilcosky.com)

#### Why do I have to put sw.js and site.webmanifest at the public root?

PWAs require a service worker and a web manifest file. The service worker will only work with the files it is contained within. In other words, if you try to call it from an assets folder, the app will not work. This is because if in an assets folder, the service worker only pertains to the files in that assets folder. The web menifest kind of works elsewhere, but I noticed a warning in my dev console when the web menifest was placed outside of the root. Therefore, let's keep that file in your public root as well.

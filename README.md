# Flarum PWA - _Now we're progressive._

Turns Flarum into a basic progressive web app. This does not include an offline mode, although it attempts to at least cache the index locally. Better offline features may be added in the future (feel free to do a pull request to help out). With this extension installed, if using a compatible browser, you will see a way to install the forum. Doing this will add an icon to your desktop or homescreen, and now it will open in a "standalone" app window.

This is what you see in Chrome (on a desktop). Each browser and device will handle this differently.
![](https://i.ibb.co/H4PBm8p/Screenshot-2019-09-28-at-5-27-26-AM.png)

Here is the experience after it is installed on a Chromebook:
https://vimeo.com/362968169

## Install instructions

#### Pre-install:

**You must do one step manually before installing. And, there is one other manual step which most likely is not required, but might be needed. Finally, there is an optional step AFTER install if you want a custom logo... you’ll see that step after the composer step below..**

1. **Required** pre-install step: Add [sw.js](https://github.com/zerosonesfun/pwa/blob/master/assets/sw.js) to the public root of your site. If you're curious, read at the bottom around why this is necessary. One way to do this is you can copy the code in this file, and paste it into a new file and name it sw.js. Then upload to your public root aka “/“ aka public_html aka home. 
2. _Optional_ pre-install step: If you already have a web manifest file for some reason, remove it.

#### Install:

`composer require zerosonesfun/pwa`

3. _Optional_ post-install step: Go to /assets/extensions/zerosonesfun-pwa/ and replace the two images with your logo. Don’t change the file names. 
4. Enjoy.

#### Update:

`composer update zerosonesfun/pwa`

#### Links:
- Github: [https://github.com/zerosonesfun/pwa](https://github.com/zerosonesfun/pwa)
- Packagist: [https://packagist.org/packages/zerosonesfun/pwa](https://packagist.org/packages/zerosonesfun/pwa)
- Me: [https://wilcosky.com](https://wilcosky.com)

#### About the sw.js required manual step
As you saw you are required to manually add sw.js to your root. This is the "Service Worker" file. It is designed so that it will only work within the scope that it is placed. In other words, if you want your PWA to be installable from any page on your forum, it needs to be at the public root. If it were placed instead in an assets folder or another directory, it will fail. There is a way to modify request headers to make this work from any folder, but that is currently out of scope for this project. Feel free to Google this stuff if you don't believe me.

If the Service Worker file was able to be placed in any folder without modifying headers, then I could have placed it in the assets folder and due to the way Flarum extensions install and work, there would have been no required manual step for you. But, this just isn't the case. 

The only way I could make this step automatic, is if a Flarum dev knows of a way, upon activating an extension, to have this sw.js automatically added to the public root. If you know how to do this, let me know!

#### Final thought

I know some will want full offline support. Or, some will ask things like, why not make it so that you can change the app icon from the admin? But, just be grateful that you can now let people "install" your forum. More features may come... that's always possible. :)

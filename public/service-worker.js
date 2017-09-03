// 'install' -- happens only the first time, or when a new version of service-worker.js is detected
self.addEventListener('install', function(e) {
    e.waitUntil(
        caches.open('tarzan').then(function(cache) {
            return cache.addAll([
            '/',
            '/css/app.css',
            '/css/flickity.css',
            '/js/app.js',
            '/img/tarzan-logo.png',
            '/img/bg_square_logo.png',
            '/img/haulage-and-fleet.jpg',
            '/img/warehouses.jpg',
            '/img/container.jpg',
            '/img/store.jpg',
            '/img/slides/tarzan-lorry-with-cocoa-bags.jpg',
            '/manifest.json',
            '/img/slides/tarzan-reach-stacker.jpg'
            ]);
        })
    );
});

// // 'activate' -- happens after installation
// self.addEventListener('activate', function(event){
//     console.log('The service worker has been activated');
// });

// 'fetch'
self.addEventListener('fetch', function(event) {
    // console.log(event.request.url);
        event.respondWith(
        caches.match(event.request).then(function(response) {
        return response || fetch(event.request);
        })
    );
});

/*
https://tarzan.dev/
service-worker.js:21 https://tarzan.dev/css/flickity.css
service-worker.js:21 https://tarzan.dev/css/app.css
service-worker.js:21 https://tarzan.dev/img/tarzan-logo.png
service-worker.js:21 https://tarzan.dev/img/bg_square_logo.png
service-worker.js:21 https://tarzan.dev/js/app.js
service-worker.js:21 https://tarzan.dev/manifest.json
service-worker.js:21 https://news.tarzan.com.gh/wp-content/uploads/2003/09/tarzan_seventh_ave.jpg
service-worker.js:21 https://ssl.google-analytics.com/ga.js
service-worker.js:21 https://tarzan.dev/img/haulage-and-fleet.jpg
service-worker.js:21 https://tarzan.dev/img/warehouses.jpg
service-worker.js:21 https://tarzan.dev/img/container.jpg
service-worker.js:21 https://tarzan.dev/img/store.jpg
service-worker.js:21 https://tarzan.dev/img/slides/tarzan-lorry-with-cocoa-bags.jpg
app.js:2002 SW Registered! Scope is: https://tarzan.dev/
manifest.json:1 Manifest: one of 'url' or 'id' is required, related application ignored.
service-worker.js:21 https://ssl.google-analytics.com/__utm.gif?utmwv=5.6.7&utms=14&utmn=945001852&utmhn=tarzan.dev&utmcs=UTF-8&utmsr=2560x1440&utmvp=1280x754&utmsc=24-bit&utmul=en-us&utmje=0&utmfl=-&utmdt=Welcome%20To%20Tarzan%20Enterprise%20Ltd.%20Ghana&utmhid=723345755&utmr=0&utmp=%2F&utmht=1504443835880&utmac=UA-1938524-4&utmcc=__utma%3D177935520.691074374.1503751483.1504437248.1504441833.4%3B%2B__utmz%3D177935520.1503751483.1.1.utmcsr%3D(direct)%7Cutmccn%3D(direct)%7Cutmcmd%3D(none)%3B&utmjid=&utmu=qAAAAAAAAAAAAAAAAAAAAAAE~
service-worker.js:21 https://tarzan.dev/img/slides/tarzan-reach-stacker.jpg
 */
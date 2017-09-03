// service worker stuff
if (!('serviceWorker' in navigator)) {
    console.log('service worker not supported');
} else {
    // register service worker
    navigator.serviceWorker.register(
        'service-worker.js'
    )
    .then(function(registration){
        console.log(`SW Registered! Scope is: ${registration.scope}`);
    });
}
// Flickity
const Flickity = require('flickity-imagesloaded'); 
require('flickity-bg-lazyload');

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
  // options
  cellAlign: 'left',
  imagesLoaded: true,
  autoPlay: true,
  bgLazyLoad: true,
  contain: true
});
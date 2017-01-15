console.log('all done sir');

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
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

window.Axios = require('axios');

// Vue
window.Vue = require('vue');
Vue.component('tarzan-slideshow', require('./components/TarzanSlideshow.vue'));
Vue.component('tarzan-news', require('./components/TarzanNews.vue'));

const app = new Vue({
    el: '#app'
});
window.Axios = require('axios');

// Vue
window.Vue = require('vue');
Vue.component('tarzan-slideshow', require('./components/TarzanSlideshow.vue'));
Vue.component('tarzan-news', require('./components/TarzanNews.vue'));

const app = new Vue({
    el: '#app'
});
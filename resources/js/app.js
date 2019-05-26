window.Axios = require('axios');

// Vue
window.Vue = require('vue');
Vue.component('tarzan-slideshow', require('./components/TarzanSlideshow.vue').default);
Vue.component('tarzan-news', require('./components/TarzanNews.vue').default);

const app = new Vue({
    el: '#app'
});
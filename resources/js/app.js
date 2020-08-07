// import Vue from 'vue'
// import App from './App.vue'
// import router from './router'
// import store from "./store"
//
// import { CarouselPlugin, BCarousel, BCarouselSlide, BImg, BModal, BButton } from 'bootstrap-vue'
// Vue.use(CarouselPlugin);
// Vue.component('b-carousel', BCarousel);
// Vue.component('b-carousel-slide', BCarouselSlide);
// Vue.component('b-img', BImg);
// Vue.component('b-modal', BModal);
// Vue.component('b-button', BButton);
// // plugins
// import './plugins/axios'
//
// import VTooltip from "./components/VTooltip";
//
// Vue.config.productionTip = false;
//
// new Vue({
//     router,
//     store,
//     render: h => h(App)
// }).$mount('#app');
//
//
import VTooltip from "./components/VTooltip";

require('./bootstrap');

window.Vue = require('vue');

Vue.component('v-tooltip', VTooltip);

const app = new Vue({
    el: '#app'
});
import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
// plugins
import './plugins/axios'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// components
import { BootstrapVue, BModal, BButton } from 'bootstrap-vue'
import VTooltip from './components/VTooltip';
import { mapState } from 'vuex';

Vue.use(BootstrapVue);
Vue.component('b-modal', BModal);
Vue.component('b-button', BButton);
Vue.component('app', App)
Vue.component('v-tooltip', VTooltip);
Vue.config.productionTip = false;

const app = new Vue({
    el: '#app',
    store,
    router,
    methods: {
        showLogoutModal() {
            this.$refs['logout-modal'].show()
        },
        hideLogoutModal() {
            this.$refs['logout-modal'].hide()
        }
    },
    computed: {
        ...mapState('filter', ['testVar']),
    }
});
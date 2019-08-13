require('./bootstrap');
window.Vue = require('vue');

import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './components/App'

import SuiVue from 'semantic-ui-vue';
import 'semantic-ui-css/semantic.min.css';
import store from './store/store'
import router from './router/router'

import 'nprogress/nprogress.css'

Vue.use(VueAxios, axios);
Vue.use(SuiVue);

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    store,
    router,
});

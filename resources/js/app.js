require('./bootstrap');
window.Vue = require('vue');

import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './components/App'

import SuiVue from 'semantic-ui-vue';
import store from './store/store'
import router from './router/router'

import 'nprogress/nprogress.css'
import '../semantic/dist/semantic.min.css'

Vue.use(VueAxios, axios);
Vue.use(SuiVue);

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    store,
    router,
    mounted() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    },
});

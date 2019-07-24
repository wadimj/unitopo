/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import axios from 'axios';
import SuiVue from 'semantic-ui-vue';
import 'semantic-ui-css/semantic.min.css';
import VueLayers from 'vuelayers';
import 'vuelayers/lib/style.css'; // needs css-loader
import App from './components/App'

import Welcome from './components/Welcome'
import ExampleComponent from './components/ExampleComponent'
import PlayersIndex from './components/PlayersIndex/PlayersIndex'
import RouteIndex from './components/topo/RouteIndex/RouteIndex'

Vue.use(VueRouter);

Vue.use(VueAxios, axios);

Vue.use(SuiVue);

Vue.use(VueLayers);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Welcome
        },
        {
            path: '/hello',
            name: 'hello',
            component: ExampleComponent,
        },
        {
            path: '/players',
            name: 'players.index',
            component: PlayersIndex,
        },
        {
            path: '/routes',
            name: 'route.index',
            component: RouteIndex,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
});

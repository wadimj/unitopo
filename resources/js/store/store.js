import Vue from 'vue';
import Vuex from 'vuex';
import routes from './routeStore';

Vue.use(Vuex);

export default new Vuex.Store({
    strict: true,
    modules: {
        routes,
    },
});

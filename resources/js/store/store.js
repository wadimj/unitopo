import Vue from 'vue';
import Vuex from 'vuex';
import routes from './routeStore';
import loader from './loadingStore'
import filters from './filterStore'

Vue.use(Vuex);

export default new Vuex.Store({
    strict: true,
    modules: {
        routes,
        loader,
        filters
    },
});

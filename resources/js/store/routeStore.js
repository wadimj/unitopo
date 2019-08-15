import routesApi from '../api/routesApi';
import store from './store'

export default {
    state: {
        routes: [],
        meta: null,
        links: null,
        activeRoute: null
    },
    mutations: {
        SET_ROUTES(state, routes){
            state.routes = routes;
        },
        SET_META(state, response){
            state.meta = response.meta;
            state.links = response.links;
        },
        SET_ACTIVE_ROUTE(state, route){
            state.activeRoute = route
        },
    },
    actions: {
        getRoutes({commit}, params) {
            store.commit('loader/START_LOADING');
            return new Promise((resolve, reject) => {
                routesApi.getRoutes(params).then(response => {
                    commit('SET_ROUTES', response.data.data);
                    commit('SET_META', response.data);
                    store.commit('loader/FINISH_LOADING');
                    resolve(response);
                }).catch(error => {
                    store.commit('loader/SET_ERROR', error);
                })
            });
        },
        getFullRoute({commit}, id) {
            store.commit('loader/START_LOADING');
            return new Promise((resolve, reject) => {
                routesApi.getFullRoute(id).then(response => {
                    commit('SET_ACTIVE_ROUTE', response.data.data);
                    store.commit('loader/FINISH_LOADING');
                    resolve(response);
                }).catch(error => {
                    store.commit('loader/SET_ERROR', error.response);
                })
            });
        }
    },
    getters: {
        getRouteById: (state) => (id) => {
            let foundit = state.routes.find(route => (route.id === id));
            if (typeof foundit == 'undefined') store.dispatch('getRoutes', {id: id});
            return state.routes.find(route => route.id === id);
        },
        getActiveRoute(state) {
            return state.activeRoute;
        }
    },
    namespaced: true
};

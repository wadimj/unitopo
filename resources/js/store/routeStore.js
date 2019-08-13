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
        setRoutes(state, routes){
            state.routes = routes;
        },
        setMeta(state, response){
            state.meta = response.meta;
            state.links = response.links;
        },
        setActiveRoute(state, route){
            state.activeRoute = route
        },
    },
    actions: {
        getRoutes({commit}, params) {
            store.commit('loader/START_LOADING');
            return new Promise((resolve, reject) => {
                routesApi.getRoutes(params).then(response => {
                    commit('setRoutes', response.data.data);
                    commit('setMeta', response.data);
                    store.commit('loader/FINISH_LOADING');
                    resolve(response);
                }).catch(error => {
                    reject(error);
                    store.commit('loader/FINISH_LOADING');
                })
            });
        },
        getFullRoute({commit}, id) {
            store.commit('loader/START_LOADING');
            return new Promise((resolve, reject) => {
                routesApi.getFullRoute(id).then(response => {
                    commit('setActiveRoute', response.data.data);
                    store.commit('loader/FINISH_LOADING');
                    resolve(response);
                }).catch(error => {
                    reject(error);
                    store.commit('loader/FINISH_LOADING');
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
    }
};

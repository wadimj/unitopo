import routesApi from '../api/routesApi';

export default {
    state: {
        routes: [],
        meta: null,
        links: null,
        activeRoute: null
    },
    mutations: { // Used by store.actions
        setRoutes(state, routes){
            state.routes = routes;
        },
        setMeta(state, response){
            state.meta = response.meta;
            state.links = response.links;
        }
    },
    actions: {  // Used by Components via dispatch()
        /*FETCH_ROUTEZ: function ({commit}, get_object) {
            const found_post = this.getters.getPost(get_object.type, get_object.slug);

            if (typeof found_post !== 'undefined') { // In-Memory already
                commit('SET_ROUTES_LOADING', false);
            } else { //no matches, hit the API
                commit('SET_ROUTES_LOADING', true);
                WordpressService.getPost(get_object.type, get_object.slug)
                    .then((response) => {
                        if (response.routes.length === 0)
                        // OPTIONAL: Handle 404s
                            commit('STORE_ROUTES', {routes: response.routes});
                    }, err => { // seems to be rare in normal circumstances.
                        console.log("FETCH_ROUTE: err:", err, get_object);
                        commit('SET_ROUTES_LOADING', false);
                    });
            }
        },*/

        getRoutes({commit}, params) {
            return new Promise((resolve, reject) => {
                routesApi.getRoutes(params).then(response => {
                    commit('setRoutes', response.data.data);
                    commit('setMeta', response.data);
                    resolve(response);
                }).catch(error => {
                    reject(error);
                })
            });
        }
    },
    getters: { // Used by Component
        /*getPostBySlug: (state) => (slug) => {
            let foundit = state.routes.find(post => (post.slug === slug && post.type === 'post'));
            if (typeof foundit == 'undefined') store.dispatch('FETCH_ROUTES', {slug: slug});
            return state.routes.find(post => post.slug === slug);
        },*/
        getActiveRoute(state) {
            return state.activeRoute;
        }
    }
};

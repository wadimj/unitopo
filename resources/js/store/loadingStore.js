export default {
    state: {
        loading: 0
    },
    mutations: {
        START_LOADING: state => state.loading++,
        FINISH_LOADING: state => state.loading--,
    },
    getters: {
        loading: state => state.loading,
    },
    namespaced: true
};

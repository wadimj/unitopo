export default {
    state: {
        loading: 0,
        error: null
    },
    mutations: {
        START_LOADING: state => {
            state.error = null;
            state.loading++
        },
        FINISH_LOADING: state => state.loading--,
        SET_ERROR(state, error){
            state.error = error;
            state.loading = 0;
        }
    },
    getters: {
        loading: state => state.loading,
        error: state => state.error
    },
    namespaced: true
};

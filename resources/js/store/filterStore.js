export default {
    namespaced: true,
    state: {
        elements: []
    },
    mutations: {
        updateElements: (state, payload) => {
            state.elements = payload;
        }
    },
    actions: {
        updateElements: ({ commit }, payload) => {
            commit("updateElements", payload);
        }
    }
};

export default {
    namespaced: true,
    state: {
        elements: [

        ]
    },
    mutations: {
        UPDATE_ELEMENTS: (state, payload) => {
            //Remove duplicates
            payload.find(function(element, index, array){
                if(typeof element === 'undefined'){
                    return;
                }

                let key = element.duplicate;
                let currIndex = index;

                payload.find(function(element, index, array){
                    if(typeof element === 'undefined'){
                        return;
                    }

                    if(element.duplicate === key && index !== currIndex){
                        array.splice(index, 1);
                        //todo notify about duplicate
                    }
                });
            });

            state.elements = payload;
        },
        REMOVE_ELEMENT: (state, key) => {
            state.elements.find(function(element, index, array){
                if(typeof element !== 'undefined' && element.k === key){
                    array.splice(index, 1);
                }
            });
        },
    },
    actions: {
        updateElements: ({ commit }, payload) => {
            commit("UPDATE_ELEMENTS", payload);
        },
        removeElement: ({ commit }, key) => {
            commit("REMOVE_ELEMENT", key);
        },
    },
    getters: {

    }
};

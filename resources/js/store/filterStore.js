export default {
    namespaced: true,
    state: {
        tags: [],
        regions: [],
    },
    mutations: {
        UPDATE_TAGS: (state, payload) => {
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

            state.tags = payload;
        },
        REMOVE_TAG: (state, key) => {
            state.tags.find(function(element, index, array){
                if(typeof element !== 'undefined' && element.k === key){
                    array.splice(index, 1);
                }
            });
        },
        UPDATE_REGIONS: (state, payload) => {
            state.regions = payload;
        },
        REMOVE_REGION: (state, key) => {
            state.regions.find(function(element, index, array){
                if(typeof element !== 'undefined' && element.k === key){
                    array.splice(index, 1);
                }
            });
        },
    },
    actions: {
        updateTags: ({ commit }, payload) => {
            commit("UPDATE_TAGS", payload);
        },
        removeTag: ({ commit }, key) => {
            commit("REMOVE_TAG", key);
        },
        updateRegions: ({ commit }, payload) => {
            commit("UPDATE_REGIONS", payload);
        },
        removeRegion: ({ commit }, key) => {
            commit("REMOVE_REGION", key);
        },
    },
    getters: {

    }
};

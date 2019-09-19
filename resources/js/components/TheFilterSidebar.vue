<!--suppress ALL -->
<template>
        <div class="ui sidebar vertical menu" id="filterSidebar">
            <h4 class="ui top attached header">Tags</h4>
            <draggable
                class="dragArea ui attached segment"
                group="types"
                v-model="tags"
                @add="add"
                @change="log"
            >
                <type v-for="tag in tags" :type="tag" :key="tag.id" :delete-btn="true" v-on:delete="removeTag"/>
            </draggable>

            <h4 class="ui top attached header">Regions</h4>
            <draggable
                class="dragArea ui attached segment"
                group="regions"
                v-model="regions"
                @add="add"
                @change="log"
            >
                <region v-for="region in regions" :region="region" :key="region.id" :filter-mode="true"/>
            </draggable>
        </div>
</template>
<script>
    import store from '../store/store';
    import draggable from "../libraries/vuedraggable.umd";
    import type from "./topo/VType";
    import region from "./topo/VRegion";

    export default {
        components: {
            draggable,
            type,
            region
        },
        computed: {
            tags: {
                get() {
                    return store.state.filters.tags;
                },
                set(value) {
                    store.dispatch('filters/updateTags', value);
                },
            },
            regions: {
                get() {
                    return store.state.filters.regions;
                },
                set(value) {
                    store.dispatch('filters/updateRegions', value);
                },
            }
        },
        mounted() {
            $('#filterSidebar')
                .sidebar({
                    //context: '.main',
                    closable: false,
                    dimPage: false,
                    transition: 'overlay'
                });
        },
        methods: {
            add: function(evt) {
                window.console.log("FILTER SIDEBAR ADD");
                window.console.log($(evt));
            },
            log: function(evt) {
                window.console.log("LOG");
                window.console.log(evt);
            },
            removeTag(key) {
                console.log("DELETE");
                console.log(key);
                store.dispatch('filters/removeTag', key);

                $('[data-toggle="tooltip"]').tooltip('hide');
            },
        }
    }
</script>
<style>
    #filterSidebar{
        padding: 10px;
        top: 40px;
    }
    .dragArea{
        display: inline-block;
        line-height: 2em;
        min-height: 4em;
        width: 100%;
    }
    .close.icon{
        padding: 1px 2px 0 7px;
    }
</style>

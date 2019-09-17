<!--suppress ALL -->
<template>
        <div class="ui sidebar vertical menu" id="filterSidebar">
            <h4 class="ui top attached header">Types</h4>
            <draggable
                class="dragArea ui attached segment"
                group="types"
                :list="list1"
                @add="add"
                @change="log"
            >
                <type v-for="type in list1" :type="type" :key="type.k" :delete-btn="true" v-on:delete="removeTag"/>
            </draggable>

            <h4 class="ui top attached header">Grades</h4>
            <draggable
                class="dragArea ui attached segment"
                group="grades"
            >
            </draggable>

            <h4 class="ui top attached header">Regions</h4>
            <draggable
                class="dragArea ui attached segment"
                group="regions"
            >
            </draggable>
        </div>
</template>
<script>
    import draggable from "../libraries/vuedraggable.umd"
    import {mapState} from 'vuex';
    import type from "./topo/VType"

    export default {
        components: {
            draggable,
            type
        },
        computed: {
            ...mapState({
                elements: state => state.filters.elements,
            }),
        },
        data() {
            return {
                list1: [{"k":"type","v":"alpine","color":"red","icon":"cube"},{"k":"suscipit","v":"iusto","color":"green","icon":"tag"},{"k":"natus","v":"aut","color":"green","icon":"tag"}]
            };
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

                if(evt.)
            },
            removeTag(key) {
                console.log("DELETE");
                console.log(key);
                this.list1.find(function(element, index, array){
                    if(typeof element !== 'undefined' && element.k === key){
                        delete array.splice(index, 1);
                    }
                });

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

<template>
    <div class="RegionFormatter">
        <sui-label>
            <i class="globe icon"></i>
            <draggable :group="{ name: 'regions', pull: 'clone', put: false }"
                       :sort="false"
                       :clone="cloneRegion"
                       draggable=".route-region"
                       :list="regionsFiltered"
                       class="draggable-regions"
                       ghost-class="ghost"
            >
                <region v-for="region in regionsFiltered" :region="region" :key="region.id" class="route-region" draggable="true"/>
            </draggable>
        </sui-label>
    </div>
</template>

<script>
    import draggable from "../../libraries/vuedraggable.umd"
    import region from "../topo/VRegion";

    export default {
        props: ['regions'],
        components: {
            draggable,
            region
        },
        computed: {
            regionsFiltered() {
                return this.regions.filter(x => x.parent_id !== null);
            },
        },
        methods: {
            cloneRegion(obj) {
                window.console.log("CLONE_R");
                window.console.log(obj);
                return obj;
            }
        }
    };
</script>

<style>
    .RegionFormatter{
        display: flex;
    }
    .draggable-regions{
        display: inline;
    }
    .RegionFormatter .globe.icon{
        display: inline-block;
    }
    .RegionFormatter .route-region:last-child .right.icon{
        display: none;
    }
    .ghost{
        color: red;
    }
</style>

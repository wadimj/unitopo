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
                let currRegions = this.regions.filter(x => x.parent_id !== null);
                let path = currRegions.map(obj => {
                    return obj.name;
                });
                console.log(path);

                return currRegions.map(obj => {
                    let rObj = obj;

                    let index = currRegions.findIndex(x => x.id === obj.id);
                    let currPath = path.slice(0, index+1);

                    rObj.path = currPath.join(' > ');

                    switch (rObj.type) {
                        case 'continent':
                            rObj.typeDsc = 'Continent';
                            rObj.color = 'blue';
                            break;
                        case 'region':
                            rObj.typeDsc = 'Region';
                            rObj.color = 'blue';
                            break;
                        case 'subregion':
                            rObj.typeDsc = 'Subregion';
                            rObj.color = 'blue';
                            break;
                        case 'm-range':
                            rObj.typeDsc = 'Mountain Range';
                            rObj.color = 'purple';
                            break;
                        case 'm-valley':
                            rObj.typeDsc = 'Mountain Valley';
                            rObj.color = 'red';
                            break;
                        case 'm-masiff':
                            rObj.typeDsc = 'Mountain Masiff';
                            rObj.color = 'red';
                            break;
                        case 'm-wall':
                            rObj.typeDsc = 'Mountain Wall';
                            rObj.color = 'red';
                            break;
                        case 'crag':
                            rObj.typeDsc = 'Crag';
                            rObj.color = 'green';
                            break;
                        case 'rock':
                            rObj.typeDsc = 'Rock';
                            rObj.color = 'red';
                            break;
                        default:
                            rObj.typeDsc = 'Region';
                            rObj.color = 'purple';
                            break;
                    }

                    return rObj;
                });
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

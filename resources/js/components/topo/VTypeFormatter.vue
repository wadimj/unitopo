<template>
    <div class="TypeFormatter">
        <draggable :group="{ name: 'types', pull: 'clone', put: false }"
                   :sort="false"
                   :clone="cloneType"
                   ghost-class="ghost"
                   :list="types"
        >
            <type v-for="type in types" :type="type" :key="type.id"/>
        </draggable>
    </div>
</template>

<script>
    import draggable from "../../libraries/vuedraggable.umd"
    import type from "./VType"

    export default {
        props: ['tags', 'allTags'],
        components: {
            draggable,
            type
        },
        computed: {
            types () {
                let retTags;
                if(this.allTags) {
                    retTags = this.tags;
                }else{
                    retTags = this.tags.filter(x => x.k === 'type');
                }

                return retTags.map(obj => {
                    var rObj = {};
                    rObj.id = obj.id;
                    rObj.k = obj.k;
                    rObj.v = obj.v;
                    rObj.dsc = obj.dsc;
                    rObj.duplicate = obj.duplicate;

                    switch (rObj.k) {
                        case 'type':
                            rObj.icon = 'cube';
                            rObj.color = 'purple';
                            break;
                        case 'length':
                            rObj.icon = 'arrow circle up';
                            rObj.color = 'orange';
                            rObj.v = obj.v + ' m';
                            break;
                        case 'loose':
                            rObj.icon = 'cubes';
                            rObj.color = 'red';
                            rObj.v = '';
                            break;
                        case 'top-pick':
                            rObj.icon = 'star';
                            rObj.color = 'yellow';
                            rObj.v = '';
                            break;
                        default:
                            rObj.icon = 'tag';
                            rObj.color = 'green';
                            break;
                    }

                    return rObj;
                });
            }
        },
        methods: {
            cloneType(obj) {
                window.console.log("CLONE");
                window.console.log(obj);
                return obj;
            }
        }
    };
</script>

<style scoped>
    .TypeFormatter{
        display: flex;
    }
    .ui.label{
        cursor: grab;
    }
</style>

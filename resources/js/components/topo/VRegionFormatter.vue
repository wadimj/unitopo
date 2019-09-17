<template>
    <div class="RegionFormatter">
        <draggable :group="{ name: 'regions', pull: 'clone', put: false }" :sort="false">
            <sui-breadcrumb icon="right angle" :sections="sections" />
        </draggable>
    </div>
</template>

<script>
    import draggable from "../../libraries/vuedraggable.umd"

    export default {
        props: ['regions'],
        components: {
            draggable
        },
        computed: {
            sections() {
                let regions = this.regions.filter(x => x.parent_id !== null);

                return regions.map(obj => {
                    var rObj = {};
                    rObj.key = obj.id;
                    rObj.content = obj.name;
                    rObj.link = true;
                    return rObj;
                });
            },
        }
    };
</script>

<style scoped>
    .RegionFormatter{
        display: flex;
    }

    .breadcrumb {
        padding: .5833em .833em;
    }

    .ui.breadcrumb {
        font-size: .85714286rem;
    }
</style>

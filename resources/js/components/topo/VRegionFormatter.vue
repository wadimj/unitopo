<template>
    <div class="RegionFormatter">
        <sui-breadcrumb icon="right angle" :sections="sections" />
    </div>
</template>

<script>
    export default {
        props: ['regions'],
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

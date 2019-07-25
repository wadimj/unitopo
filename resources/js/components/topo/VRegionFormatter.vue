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
                return this.regions.map(obj => {
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

<style>
    .RegionFormatter{
        display: flex;
    }
</style>

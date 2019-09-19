<template>
    <sui-label v-if="filterMode" data-toggle="tooltip" :title="region.dsc" class="route-region">
        <i class="globe icon"></i>
        {{ region.name }}
        <i class="close icon"
           :data-index="region.id" data-role="remove-filter" v-on:click="deleteRegion"></i>
    </sui-label>
    <span v-else>
        {{ region.name }}
        <i class="right angle icon"></i>
    </span>
</template>

<script>
    export default {
        props: ['region', 'filterMode'],
        methods: {
            deleteRegion: function () {
                this.$emit('delete', this.region.id);
            }
        }
    };
</script>

<style scoped>
    .route-tag i{
        margin: 0 !important;
    }
</style>

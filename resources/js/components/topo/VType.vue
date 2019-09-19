<template>
    <sui-label :color="type.color"
               data-toggle="tooltip" :title="type.dsc" class="route-tag">
        <i :class="type.icon + ' icon'"></i>
        {{ type.v }}
        <i v-if="filterMode" class="close icon"
           :data-index="type.k" data-role="remove-filter" v-on:click="deleteTag"></i>
    </sui-label>
</template>

<script>
    export default {
        props: ['type', 'filterMode'],
        methods: {
            deleteTag: function () {
                this.$emit('delete', this.type.k);
            }
        }
    };
</script>

<style scoped>
    .route-tag i{
        margin: 0 !important;
    }
</style>

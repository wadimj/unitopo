<template>
    <div class="GradeFormatter">
        <draggable :group="{ name: 'grades', pull: 'clone', put: false }" :sort="false">
            <sui-label v-for="grade in grades" color="blue" :key="grade.id" class="grade-label"
                       data-toggle="tooltip" :title="'Scale ' + grade.scale_id">
                <i class="sort amount up icon"></i>
                {{ grade.value }}
            </sui-label>
        </draggable>
    </div>
</template>

<script>
    import draggable from "../../libraries/vuedraggable.umd"

    export default {
        components: {
            draggable
        },
        props: {
            grades: Array
        }
    };
</script>

<style>
    .GradeFormatter{
        display: flex;
    }
</style>

<template>
    <div class="GradeFormatter">
        <sui-label v-for="grade in grades" color="blue" :key="grade.id" class="grade-label"
                   data-toggle="tooltip" :title="'Scale ' + grade.scale_id">
            <i class="sort amount up icon"></i>
            {{ grade.value }}
        </sui-label>
    </div>
</template>

<script>
    export default {
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

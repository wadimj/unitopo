<template>
    <div class="GradeFormatter">
        <sui-label v-for="grade in grades" color="blue" :key="grade.id"
                   data-toggle="tooltip" :title="'Scale ' + grade.scale_id">
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

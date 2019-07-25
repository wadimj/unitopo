<template>
    <div class="GradeFormatter">
        <sui-label v-for="grade in grades" color="blue" :key="grade.id">
            {{ grade.value }}
        </sui-label>
    </div>
</template>

<script>
    export default {
        props: ['grades'],
        data() {
            return {
                grades: null
            };
        },
    };
</script>

<style>
    .GradeFormatter{
        display: flex;
    }
</style>

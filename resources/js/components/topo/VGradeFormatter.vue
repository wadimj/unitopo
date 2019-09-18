<template>
    <div class="GradeFormatter">
        <draggable :group="{ name: 'types', pull: 'clone', put: false }"
                   :sort="false"
                   :list="gradesConverted"
        >
            <type v-for="grade in gradesConverted" :type="grade" :key="grade.id"/>
        </draggable>
    </div>
</template>

<script>
    import draggable from "../../libraries/vuedraggable.umd"
    import type from "./VType"

    export default {
        components: {
            draggable, type
        },
        props: {
            grades: Array
        },
        computed: {
            gradesConverted() {
                let retGrades = this.grades;

                return retGrades.map(obj => {
                    var rObj = {};
                    rObj.id = obj.id;
                    rObj.k = obj.id;
                    rObj.v = obj.value;
                    rObj.dsc = 'Scale ' + obj.scale_id;
                    rObj.icon = 'sort amount up';
                    rObj.color = 'blue';
                    rObj.duplicate = obj.scale_id;

                    return rObj;
                });
            }
        }
    };
</script>

<style>
    .GradeFormatter{
        display: flex;
    }
    .ui.label{
        cursor: grab;
    }
</style>
